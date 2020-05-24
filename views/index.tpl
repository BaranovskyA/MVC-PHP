<link rel="stylesheet" href="../index.css" media="all" />

<form action="/books"  method="POST">
    <div class="form-div">
        <input class="flex-item" type="text" name="name" placeholder="Название...">
        <input class="flex-item" type="text" name="author" placeholder="Автор...">
        <button class="flex-item">Добавить</button>
    </div>
</form>

<ul>
    {foreach $books as $book}
        <li>
            {$book->author}, "{$book->name}"
            <form action="/books/delete/{$book->id}" method="POST">
                <button>Удалить</button>
            </form>
        </li>
    {/foreach}
</ul>