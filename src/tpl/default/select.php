<div class="mt-2">
    <label for="{$id}_field" class="form-label">{$label}</label>
    <select name="{$name}" class="form-select" id="{$id}_field" <?php if (isset($required) && $required) { ?>required<?php } ?> <?php if (isset($disabled) && $disabled) { ?>disabled<?php } ?>>
        {foreach $items??[] as $_key=>$_val}
        {if is_array($_val)}
        <optgroup label="{$_key}">
            {foreach $_val as $_value=>$_title}
            {if in_array($_value, (array)$value)}
            <option value="{$_value}" selected>{$_title}</option>
            {else}
            <option value="{$_value}">{$_title}</option>
            {/if}
            {/foreach}
        </optgroup>
        {else}
        {if in_array($_key, (array)$value)}
        <option value="{$_key}" selected>{$_val}</option>
        {else}
        <option value="{$_key}">{$_val}</option>
        {/if}
        {/if}
        {/foreach}
    </select>
    {if isset($help) && $help}
    <div class="form-text text-muted" style="font-size: .8em;">{echo $help}</div>
    {/if}
</div>