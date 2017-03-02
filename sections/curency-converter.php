<div class="form-group">
    <form>
        <label class="fromLabel">FROM</label>
        <label>TO</label>
        <br>
        <div class="input-group">
            <div class="input-group-addon">
                <div id="optionsFrom" data-selected-country="US"> </div>
            </div>
            <input type="number" class="form-control fromInput" placeholder="Enter value" id="fromValue" oninput=setValues()>
            <div class="input-group-addon">
                <div id="optionsTo" data-selected-country="EU"></div>
            </div>
            <input type="text" class="form-control toInput" placeholder="Converted value" id="toValue" disabled>
        </div>
    </form>
</div>