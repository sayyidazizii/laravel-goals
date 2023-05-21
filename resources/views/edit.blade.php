<div class="p2">
    <div class="form-group">
        <label for="image">image</label>
        <input type="text" name="image" id="image"  value="{{ $data->image }}" class="form-control" placeholder="image">
        <label for="goals">Goals</label>
        <input type="text" name="goals" id="goals"  value="{{ $data->goals }}" class="form-control" placeholder="goals">
        <label for="amount">amount</label>
        <input type="number" name="amount" id="amount"  value="{{ $data->amount }}" class="form-control" placeholder="amount">
        <label for="current">current</label>
        <input type="number" name="current" id="current"  value="{{ $data->current }}" class="form-control" placeholder="current">
        <label for="balance">balance</label>
        <input type="number" name="balance" id="balance"  value="{{ $data->balance }}" class="form-control" placeholder="balance">
        <label for="duedate">duedate</label>
        <input type="date" name="duedate" id="duedate"  value="{{ $data->duedate }}" class="form-control" placeholder="duedate">
    </div>
    <div class="form-group">
        <button class="btn btn-warning mt-2" onClick="update({{ $data->id }})">update</button>
    </div>
</div>