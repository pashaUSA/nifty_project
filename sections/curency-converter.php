<div class="modal fade" id="currencyModal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
<div class="modal-dialog">
    <div class="panel panel-default">
        <div class="panel-body">
            <h1>Currency Converter</h1>
            <div class="form-group">
                <form>
                    <label class="fromLabel">FROM</label>
                    <label>TO</label>
                    <br>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <div id="optionsFrom" data-selected-country="US"> </div>
                        </div>
                        <input type="number" class="form-control fromInput" placeholder="Enter value" id="fromValue" oninput="setValues()">
                        <div class="input-group-addon">
                            <div id="optionsTo" data-selected-country="EU"></div>
                        </div>
                        <input type="text" class="form-control toInput" placeholder="Converted value" id="toValue" disabled>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>