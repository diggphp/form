<div class="mt-2">
    <label class="form-label">{$label}</label>
    <div>
        {foreach $items??[] as $_value=>$_label}
        <div class="form-check {if isset($inline) && $inline} form-check-inline{/if}">
            {if in_array($_value, (array)$value)}
            <input type="radio" class="form-check-input" id="{$id}_{:md5($_value)}" name="{$name}" value="{$_value}" checked>
            {else}
            <input type="radio" class="form-check-input" id="{$id}_{:md5($_value)}" name="{$name}" value="{$_value}">
            {/if}
            <label class="form-check-label" for="{$id}_{:md5($_value)}">{$_label}</label>
        </div>
        {/foreach}
    </div>
    {if isset($help) && $help}
    <div class="form-text text-muted" style="font-size: .8em;">{echo $help}</div>
    {/if}
</div>