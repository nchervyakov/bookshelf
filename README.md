bookshelf
=========
This is a test bookshelf application.


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