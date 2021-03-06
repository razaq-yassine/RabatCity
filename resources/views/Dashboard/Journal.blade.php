<div id="journals"  class="container text-center mt-5 d-none" >
    @php($journals = App\Journal::orderby('created_at','desc')->get())
    @if(count($journals)==0)
        <div class="text-center bold">Le journal est vide</div>
    @else
        <input type="text" id="myInput2" onkeyup="Recherche2()" placeholder="Search for names.." title="Type in a name">
        <select id="type2" style=" margin: 5px!important;">
            <option value="0">Action</option>
            <option value="1">Table</option>
            <option value="2">Intitule</option>
            <option value="3">Utilisateur</option>
            <option value="4">Date Action</option>
        </select>
        <table id="myTable2" class="table table-striped" >
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Action</th>
            <th scope="col">Table</th>
            <th scope="col">Intitule</th>
            <th scope="col">Utilisateur</th>
            <th scope="col">Date Action</th>
        </tr>
        </thead>
        <tbody>
        @if(isset($journals))

            @foreach($journals as $journal)

                <tr>
                    <th scope="row">{{$journal->Journal_id}}</th>
                    <td >{{$journal->Journal_action}}</td>
                    <td>{{$journal->Journal_table}}</td>
                    <td>{{$journal->Journal_intitule}}</td>
                    <td>{{$journal->Journal_user}}</td>
                    <td>{{$journal->created_at}}</td>

                </tr>
            @endforeach

        @endif

        </tbody>
    </table>
    <a href="/ViderJournal" class="btn btn-lg btn-danger mb-5 " onclick="return confirm('Est-ce que vous voulez vider le journal ?')"> Vider Le Journal</a>
    @endif
</div>

