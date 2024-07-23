<div class="container">
    <div class="row">
        <div class="col">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Líder del Proyecto</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($proyectos as $proyecto)
                    <tr>
                        <td>{{$proyecto->lider}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
