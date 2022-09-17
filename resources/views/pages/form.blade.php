<h1>envoyer des informations</h1>
<form method="post" action="search/{type}/{ville}/{prix}/{annonce}">
    @csrf
    
    <input type="text" name="type">
    <input type="text" name="ville">
    <input type="text" name="prix">
    <input type="text" name="annonce">
    <button>envoyer</button>
</form>