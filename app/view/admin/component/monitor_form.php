<form class="pl-3 pr-3 pb-2" method="post" action="">
    <div class="pb-3">
        <div class="form-label text-black mb-1 ">Choose type:</div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="entityType" id="child" value="child" checked>
            <label class="form-check-label font-medium font-sans text-black text-sm " for="child">
                Child
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="entityType" id="entity" value="entity">
            <label class="form-check-label font-medium font-sans text-black text-sm " for="entity">
                Entity
            </label>
        </div>
    </div>
    <label class="form-label text-black" for="uname">Name:</label><br>
    <input class="form-input" type="text" id="uname" name="uname"><br>
    <button class="button" name="add_entity" type="submit">Add</button>
</form>