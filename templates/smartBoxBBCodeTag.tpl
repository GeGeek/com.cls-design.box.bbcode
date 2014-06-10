{if $attribute1 == hex}
    <span class="boxBBCode_main {if $attribute3}boxBBcode_{$attribute3}{/if}">
    	<div>
            <div class="hexBoxBBCode_inline" style="background-color: {$attribute2}; border: 1px solid {$attribute2};">
                <div class="boxBbCode_content">{@$content}</div>
            </div>
        </div>
    </span>
{else}
    <span class="boxBBCode_main {if $attribute2}boxBBcode_{$attribute2}{/if}">
        <div id="boxBBCode_{$attribute1}">
            <div class="boxBbCode_content">{@$content}</div>
        </div>
    </span>
{/if}


