<?php
function renderButton($text, $type = 'primary', $href = '#', $icon = null, $attributes = []) {
    $iconHtml = $icon ? "<span class='btn-icon'>{$icon}</span>" : '';
    $extraAttrs = '';
    
    if (!empty($attributes)) {
        foreach ($attributes as $key => $value) {
            $extraAttrs .= " {$key}='{$value}'";
        }
    }
    
    return <<<HTML
    <a href="{$href}" class="btn btn-{$type}"{$extraAttrs}>
        {$iconHtml}
        {$text}
    </a>
HTML;
}

function renderButtonGroup($buttons, $alignment = 'center') {
    $alignClass = $alignment === 'center' ? 'justify-center' : ($alignment === 'left' ? 'justify-start' : 'justify-end');
    
    $buttonHtml = '';
    foreach ($buttons as $button) {
        $buttonHtml .= renderButton(
            $button['text'],
            $button['type'] ?? 'primary',
            $button['href'] ?? '#',
            $button['icon'] ?? null,
            $button['attributes'] ?? []
        );
    }
    
    return <<<HTML
    <div class="hero-buttons">
        {$buttonHtml}
    </div>
HTML;
}

function renderCTAButton($text, $href = '#', $icon = '→') {
    return renderButton($text, 'primary', $href, $icon, ['class' => 'cta-button']);
}

function renderSecondaryButton($text, $href = '#', $icon = null) {
    return renderButton($text, 'secondary', $href, $icon);
}

function renderAccentButton($text, $href = '#', $icon = null) {
    return renderButton($text, 'accent', $href, $icon);
}
?>