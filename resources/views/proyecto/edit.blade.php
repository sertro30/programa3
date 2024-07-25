<form action="{{ route('proyectos.update', $proyectos->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $proyectos->nombre }}" required>
    </div>
    <div class="form-group">
        <label for="body">Descripcion</label>
        <textarea class="form-control" id="lider" name="lider" rows="3" required>{{ $proyectos->lider }}</textarea>
    </div>
    <button type="submit" class="btn mt-3 btn-primary">Update</button>
</form>
