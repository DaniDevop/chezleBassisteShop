<div>
    <table class="table">
        <thead>
            @if(!$editRaw)
            <tr>
                <th scope="col">#</th>
                <th scope="col">Category</th>
                <th scope="col">Status</th>
                <th scope="col">Date-creation</th>
                <th scope="col">Date-update</th>
                <th scope="col">Details</th>
            </tr>
            @else
            <tr>
                <th scope="col">#</th>
                <th scope="col">Category</th>
                <th scope="col">Status</th>
                <th scope="col">Valider</th>
            </tr>
            @endif
        </thead>
        <tbody>
            @if(!$editRaw)
            @foreach($categoryAll as $Category)
            <tr>
                <th scope="row">{{ $Category->id }}</th>
                <td>{{ $Category->category }}</td>
                <td>{{ $Category->status }}</td>
                <td>{{ $Category->created_at }}</td>
                <td>{{ $Category->updated_at }}</td>
                <td>
                    <a href="#" class="btn btn-info" wire:click.prevent="edit({{ $Category->id }})">
                        <i class="bi bi-eye"></i>
                    </a>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <th scope="row">{{ $categoryData['id'] }}</th>
                <td><input type="text" value="{{ $categoryData['category'] }}" wire:model.defer="categoryData.category"></td>
                <td>
                       <select  id="" wire:model.defer="categoryData.status">
                       <option value="{{ $categoryData['status'] }}" >{{ $categoryData['status'] }}</option>
                       <option value="En-cours..."> En-cours...</option>
                       <option value="Disponible"> Disponible</option>
                       </select>
                      

            </td>
                <td>
                    <button class="btn btn-primary" wire:click.prevent="update">Save changes</button>
                </td>
            </tr>
            @endif
        </tbody>
    </table>
</div>
