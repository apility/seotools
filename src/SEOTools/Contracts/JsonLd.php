<?php

namespace Apility\SEOTools\Contracts;

/**
 * JsonLd defines contract for the JSON Linked Data container.
 *
 * Usage example:
 *
 * ```php
 * use Apility\SEOTools\JsonLd; // implements `Apility\SEOTools\Contracts\JsonLd`
 *
 * $jsonLd = new JsonLd();
 *
 * // specify JSON data
 * $jsonLd->setName('Home');
 * $jsonLd->setDescription('This is my page description');
 * $jsonLd->addValue('author', [
 *     '@type' => 'Organization',
 *     'name' => 'Apility',
 * ]));
 *
 * // render HTML, it should be placed within 'head' HTML tag
 * echo $jsonLd->generate();
 * ```
 *
 * Implementation of this contract is available via {@see \Apility\SEOTools\Facades\JsonLd} facade.
 * Facade usage example:
 *
 * ```php
 * use Apility\SEOTools\Facades\JsonLd;
 *
 * // specify JSON data
 * JsonLd::setName('Homepage');
 * JsonLd::setDescription('This is my page description');
 * JsonLd::addValue('author', [
 *     '@type' => 'Organization',
 *     'name' => 'Apility',
 * ]));
 *
 * // render HTML, it should be placed within 'head' HTML tag
 * echo JsonLd::generate();
 * ```
 *
 * @see https://json-ld.org/
 * @see \Apility\SEOTools\JsonLd
 * @see \Apility\SEOTools\Facades\JsonLd
 */
interface JsonLd
{
    /**
     * @param array $defaults
     */
    public function __construct(array $defaults = []);

    /**
     * Generates linked data script tag.
     *
     * @param bool $minify
     *
     * @return string
     */
    public function generate($minify = false);

    /**
     *  Check if all attribute are empty
     *
     * @return static
     */
    public function isEmpty();

    /**
     * @param string       $key
     * @param string|array $value
     *
     * @return static
     */
    public function addValue($key, $value);

    /**
     * @param array $values
     *
     * @return static
     */
    public function addValues(array $values);

    /**
     * @param string $type
     *
     * @return static
     */
    public function setType($type);

    /**
     * @param string $title
     *
     * @return static
     */
    public function setTitle($title);

    /**
     * @param string $site
     *
     * @return static
     */
    public function setSite($site);

    /**
     * @param string $description
     *
     * @return static
     */
    public function setDescription($description);

    /**
     * @param string|null|bool $url
     *
     * @return static
     */
    public function setUrl($url);

    /**
     * @param string|array $image
     *
     * @return static
     */
    public function addImage($image);

    /**
     * @return boolean
     */
    public function hasImage(): bool;

    /**
     * @param string|array $images
     *
     * @return static
     */
    public function setImages($images);
}
