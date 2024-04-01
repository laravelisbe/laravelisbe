@extends("admin.layouts.template")

@section('contenu')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Ajouter nouvelle categorie</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form id="quickForm" method="post" action={{route('categories.store')}}>
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="name">Nom catégorie</label>
          <input type="text" name="name" value="{{old('name')}}" class="form-control @error("name") border-danger @enderror" id="name" placeholder="Enter le nom de la categorie">
          @error("name")
          <div class=" text text-danger">{{"$message"}}</div>
          @enderror
        </div>

      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Ajouter</button>
        <button type="reset" class="btn btn-secondary">Annuler</button>
      </div>
    </form>
  </div>
@endsection
