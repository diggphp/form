<div class="mt-2">
    <label class="form-label">{$label}</label>
    <div>
        {foreach $items??[] as $_vo}
        <div class="form-check {if isset($inline) && $inline} form-check-inline{/if}">
            {if in_array($_vo['value'], (array)$value)}
            <input type="checkbox" class="form-check-input" id="{$id}_{:md5($_vo['value'])}" name="{$name}[]" value="{$_vo['value']}" checked>
            {else}
            <input type="checkbox" class="form-check-input" id="{$id}_{:md5($_vo['value'])}" name="{$name}[]" value="{$_vo['value']}">
            {/if}
            <label class="form-check-label" for="{$id}_{:md5($_vo['value'])}">{$_vo['label']??$_vo['value']}</label>
        </div>
        {/foreach}
    </div>
    {if isset($help) && $help}
    <div class="form-text text-muted" style="font-size: .8em;">{echo $help}</div>
    {/if}
</div>