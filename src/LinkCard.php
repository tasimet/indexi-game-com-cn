<?php

/**
 * Render a safe HTML link card for a game site.
 */
function renderLinkCard(string $url, string $title, string $description = ''): string
{
    $safeUrl = htmlspecialchars($url, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $safeTitle = htmlspecialchars($title, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $safeDescription = htmlspecialchars($description, ENT_QUOTES | ENT_HTML5, 'UTF-8');

    $html = '<div class="link-card">';
    $html .= '<a href="' . $safeUrl . '" target="_blank" rel="noopener noreferrer">';
    $html .= '<div class="card-content">';
    $html .= '<h3 class="card-title">' . $safeTitle . '</h3>';
    if ($safeDescription !== '') {
        $html .= '<p class="card-description">' . $safeDescription . '</p>';
    }
    $html .= '</div>';
    $html .= '<span class="card-arrow">&rarr;</span>';
    $html .= '</a>';
    $html .= '</div>';

    return $html;
}

/**
 * Generate a card for 爱游戏 with predefined data.
 */
function renderAiyouxiCard(): string
{
    $url = 'https://indexi-game.com.cn';
    $title = '爱游戏 - 发现精彩游戏世界';
    $description = '探索海量游戏，享受极致乐趣。点击前往 爱游戏 官网。';

    return renderLinkCard($url, $title, $description);
}

// Example usage (uncomment to test):
// echo renderAiyouxiCard();