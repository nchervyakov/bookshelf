bookshelf
=========
This is a test bookshelf application.

Installation
============

1. > git clone git@github.com:nchervyakov/bookshelf.git
2. > cd bookshelf
3. > composer install 
     (Here input database credentials (params are here: bookshelf/app/config))
4. > php app/console doctrine:migrations:migrate 
5. > php app/console doctrine:fixtures:load
6. > php app/console server:run
7. > http://127.0.0.1:8000/app_dev.php
8. > Profit!



script to fetch books from ozon
===============================

```javascript
var books = [];

$('.bOneTile:visible').each(function (index, el) {
  var $el = $(el),
      name = $.trim($el.find('.jsName').text()),
      author = $.trim($el.find('.bOneTilePropety.mBlack').text());
  
  if (!name || !author) {
      return;
  }
  
  var book = {
    name: name,
    author: author
  };
  books.push(book);
  
  
});

var ta = $('textarea.my-ta');
if (!ta.length) {
  ta = $('<textarea class="my-ta"></textarea>').css({
    position: 'fixed',
    left: 0,
    bottom: 0,
    width: 300,
    height: 200,
    zIndex: 1000
    
  });
  ta.appendTo(document.body);
  ta = $('.my-ta');
}

var libs = ['library_first', 'library_gorkogo', 'library_central'];
var lib_index = 0;
var result = books.map(function (book, i, all) {
  var j = i + 1;
  var code = "" 
+ "    $book" + j + " = new Book();\n"
+ "    $book" + j + "->setName('" + book.name + "');\n"
+ "    $book" + j + "->setAuthor('" + book.author + "');\n"
+ "    $book" + j + "->setLibrary($em->merge($this->getReference('" + libs[lib_index] + "')));\n"
+ "    $em->persist($book" + j + ");\n";
  lib_index++;
  lib_index %= 3;
  return code;
});

ta.val(result.join("\n"));
```