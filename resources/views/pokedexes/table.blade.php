<hr class="my-5">
    <h1 class="mb-3">Pokedex Lists</h1>
    <table class="table table-bordered table-striped align-middle text-center">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Type</th>
                <th>Species</th>
                <th>Height</th>
                <th>Weight</th>
                <th>HP</th>
                <th>Attack</th>
                <th>Defense</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php foreach ($pokedexes as $item): {?>
        <tbody>
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->type }}</td>
                <td>{{ $item->species }}</td>
                <td>{{ $item->height }}</td>
                <td>{{ $item->weight }}</td>
                <td>{{ $item->hp }}</td>
                <td>{{ $item->attack }}</td>
                <td>{{ $item->defense }}</td>
                <td>
                    <img src="{{ $item->image_url }}"
                         alt="{{ $item->name }}" width="60">
                </td>
                <td>
                    <a href="{{ url('/pokedexes/'.$item->id.'/edit') }}" class="btn btn-warning btn-sm mb-1">แก้ไข</a>

                        <form
                            action="{{ url('/pokedexes/'.$item->id) }}"
                            method="post"
                            style="display: inline-block">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm">
                                ลบ
                            </button>
                        </form>
                </td>
            </tr>
        </tbody>
        <?php } endforeach; ?>
    </table>
</div>
