<div class="col-lg-4 col-md-6 mb-md-0 mb-4">
    <div class="card shadow-xs border h-100">
        <div class="card-header pb-0">
            <h6 class="font-weight-semibold text-lg mb-0">Balances over time</h6>
            <p class="text-sm">Here you have details about the balance.</p>
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                <label class="btn btn-white px-3 mb-0" for="btnradio1">12 months</label>
                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                <label class="btn btn-white px-3 mb-0" for="btnradio2">30 days</label>
                <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                <label class="btn btn-white px-3 mb-0" for="btnradio3">7 days</label>
            </div>
        </div>
        <div class="card-body py-3">
            <div class="chart mb-2">
                <canvas id="chart-bars" class="chart-canvas" height="240"></canvas>
            </div>
            <button class="btn btn-white mb-0 ms-auto">View report</button>
        </div>
    </div>
</div>
