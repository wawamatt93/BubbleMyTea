@section('main')
    <div class="article-form">
        <h2>Ajouter un article</h2>
        
        <form action="{{ route('articles.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="titre">Titre de l'article</label>
                <input type="text" name="titre" id="titre" required>
            </div>
            <div class="form-group">
                <label for="description">Description de l'article</label>
                <textarea name="description" id="description" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="prix">Prix de l'article</label>
                <input type="number" name="prix" id="prix" step="0.01" required>
            </div>
            <button type="submit">Ajouter l'article</button>
        </form>
    </div>