<div class="uk-margin">
    <label class="uk-text-small">Move current entry <br/> to another collection</label>
    <div class="uk-margin-small-top uk-text-muted _uk-form-select">
        <form id="move-between-collections-form" class="uk-form">
            <select name="" id="destination_collection">
                <option disabled selected>please choose</option>
                @foreach($collections as $collection_name => $collection_data)
                    @if($collection_name !== $current_collection)
                        <option value="">{{ $collection_name }}</option>
                    @endif
                @endforeach
            </select>
            <button type="button" onclick="do_move()">Go</button>
        </form>
    </div>
</div>

<script>
    var $this = this;

    this.on('mount', function() {
        window.entry_data = $this;
    });

    function do_move() {
        //console.info(window.entry_data);

        var data = $.extend(window.entry_data, {
            'destination_collection' : $('select#destination_collection').find(':selected').text()
        });

        App.request("/movebetweencollections/do_copy", data)
        .then(function(res){
            if(res.success)
                App.ui.notify("Entry moved to destinatin collection successfully!", "success");
            else
                App.ui.notify("Error. Could not move entry to destination collection.", "danger");
        });
    }
</script>