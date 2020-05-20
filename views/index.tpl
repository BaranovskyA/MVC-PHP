<form action="/books"  method="POST">
    <input type="text" name="name" placeholder="Название...">
    <input type="text" name="author" placeholder="Автор...">
    <button>Добавить</button>
</form>

<ul>
    {foreach $books as $book}
        <li>{$book->author}, "{$book->name}"</li>
    {/foreach}
</ul>