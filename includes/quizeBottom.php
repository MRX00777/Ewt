<div class="bottomContainer">
    <div class="pagination">
        ШАГ <span id="stepNumber"></span> / <span id="totalSteps"></span>
    </div>
    <div class="btns">
        <button type="button" id="prevBtn" class="btn btn-black" onclick="nextPrev(-1)">
            <div class="g">
                <svg width="20" height="20">
                    <use xlink:href="/assets/icons/sprite.svg#arr-link"></use>
                </svg>
            </div>
            назад
        </button>
        <button type="button" id="nextBtn" class="btn" onclick="nextPrev(1)">
            далее
            <div class="g">
                <svg width="20" height="20">
                    <use xlink:href="/assets/icons/sprite.svg#arr-link"></use>
                </svg>
            </div>
        </button>
    </div>
</div>