<h1>Add new book</h1>
<form class="" action="/books" method="POST">
    <input type="text" name="title" value="" placeholder="Title" required>
    <br>
    <textarea name="description" rows="5" cols="25" placeholder="Description" required></textarea>
    <br>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" name="name" value="Salvar">
    <input type="button" value="Voltar" onClick="history.go(-1)">
</form>