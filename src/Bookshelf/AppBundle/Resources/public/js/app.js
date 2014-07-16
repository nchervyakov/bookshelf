/**
 * Created by Nikolay Chervyakov on 14.07.2014.
 */

var App = {
    Models: {},
    Controllers: {},
    Components: {},
    options: {
        basePath: Routing.getBaseUrl()
    }
};

var basePath = App.options.basePath;

App.Models.Library = can.Model('library', {
    findAll: 'GET ' + basePath + '/library',
    findOne: 'GET ' + basePath + '/library/{id}',
    create: 'POST ' + basePath + '/library',
    update: 'POST ' + basePath + '/library/{id}/update',
    destroy: 'POST ' + basePath + '/library/{id}/delete'
}, {});

App.Models.Book = can.Model('book', {
    findAll: 'GET ' + basePath + '/book',
    findOne: 'GET ' + basePath + '/book/{id}',
    create: 'POST ' + basePath + '/book',
    update: 'POST ' + basePath + '/book/{id}/update',
    destroy: 'POST ' + basePath + '/book/{id}/delete'
}, {});

App.Controllers.Library = can.Control.extend({
    pluginName: 'library',
    listensTo: ['updated'],
    defaults: {}
}, {
    init: function () {
        this.options.libraries = null;
        this.options.currentLibrary = can.compute();
        this.options.books = null;

        var control = this;
        App.Models.Library.findAll({}, function (libs) {
            control.options.libraries = libs;
            var tpl = can.view('librarySelectorView', {libraries: libs});
            var selector = control.element.find('.js-select-library');
            selector.append(tpl);
            control.on();
            if (libs.length) {
                control.selectFirst();
            }
        });

    },

    '.js-select-library change': function (el, ev) {
        var opt = el.find('option[value="' + el.val() + '"]');
        var lib = opt ? opt.data('library') : null;
        this.select(lib);
    },

    '.js-delete-book click': function (el, ev) {
        var book = el.data('book');
        book.destroy();
    },

    '.js-edit-book click': function (el, ev) {
        var book = el.data('book');
        var modal = $('.js-book-modal');
        modal.find('.js-book-modal-title').html('Edit book');
        modal.find('.js-book-modal-body').html('').append(can.view('bookEditForm', {book: book}));
        modal.bookForm({book: book, list: this.options.books});
        modal.modal('show');
    },

    '.js-add-book click': function (el, ev) {
        var selector = this.element.find('.js-select-library');
        var libId = selector.val();
        if (!libId || !this.options.books) {
            return;
        }
        var book = new App.Models.Book();
        book.attr('library', libId);

        var modal = $('.js-book-modal');
        modal.find('.js-book-modal-title').html('Add book');
        modal.find('.js-book-modal-body').html('').append(can.view('bookEditForm', {book: book}));
        modal.bookForm({book: book, list: this.options.books});
        modal.modal('show');
    },

    select: function (lib) {
        var control = this;
        if (lib) {
            App.Models.Book.findAll({libraryId: lib.attr('id')}, function (books) {
                control.options.books = books;
                $('.js-books').html('').append(can.view('booksView', {library: lib, books: books}));
            });
        } else {
            control.options.books = null;
            $('.js-books').html('').append(can.view('booksView', {library: lib}));
        }
        this.on();
    },

    selectFirst: function () {
        var selector = this.element.find('.js-select-library');
        selector.val(selector.find('option[value!=""]:first').attr('value'));
        selector.trigger('change');
    }
});

App.Controllers.BookForm = can.Control.extend({
    pluginName: 'bookForm'
},
{
    init: function () {
        if (this.options.book) {
            this.book = this.options.book;
        } else {
            this.book = new App.Models.Book();
        }
        this.isNew = this.options.book.isNew();

        this.element.on('hide.bs.modal', this.proxy(function () {
            this.destroy();
        }));
    },

    'form submit': function (el, ev) {
        ev.preventDefault();
        var control = this;
        this.book.attr('name', el.find('.js-name-field').val());
        this.book.attr('author', el.find('.js-author-field').val());
        this.book.attr('library', el.find('.js-library-id').val());
        this.book.attr('id', el.find('.js-id').val());
        this.book.save(function () {
            if (control.isNew) {
                control.options.list.push(control.book);
            }
        });
        this.element.modal('hide');
    }
});

$(function () {
    $('.js-library').library();
});

