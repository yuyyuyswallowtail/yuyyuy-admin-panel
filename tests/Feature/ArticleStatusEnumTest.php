<?php

use App\ArticleStatus;

test('ArticleStatus enum has correct values', function () {
    expect(ArticleStatus::DRAFT->value)->toBe('draft');
    expect(ArticleStatus::PUBLISHED->value)->toBe('published');
});

test('ArticleStatus enum has correct labels', function () {
    expect(ArticleStatus::DRAFT->label())->toBe('Draft');
    expect(ArticleStatus::PUBLISHED->label())->toBe('Published');
});

test('ArticleStatus enum isPublished method works correctly', function () {
    expect(ArticleStatus::DRAFT->isPublished())->toBeFalse();
    expect(ArticleStatus::PUBLISHED->isPublished())->toBeTrue();
});
