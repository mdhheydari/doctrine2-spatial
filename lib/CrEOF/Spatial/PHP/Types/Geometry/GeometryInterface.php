<?php
/**
 * Copyright (C) 2013, 2014 Derek J. Lambert
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

namespace CrEOF\Spatial\PHP\Types\Geometry;

/**
 * Geometry interface for Geometry objects
 *
 * @author     Derek J. Lambert <dlambert@dereklambert.com>
 * @license    http://dlambert.mit-license.org MIT
 * @deprecated Geometry classes have been replaced by creof/geo
 */
interface GeometryInterface
{
    /**
     * @deprecated Geometry classes have been replaced by creof/geo
     */
    const GEOMETRY           = 'Geometry';
    /**
     * @deprecated Geometry classes have been replaced by creof/geo
     */
    const POINT              = 'Point';
    /**
     * @deprecated Geometry classes have been replaced by creof/geo
     */
    const LINESTRING         = 'LineString';
    /**
     * @deprecated Geometry classes have been replaced by creof/geo
     */
    const POLYGON            = 'Polygon';
    /**
     * @deprecated Geometry classes have been replaced by creof/geo
     */
    const MULTIPOINT         = 'MultiPoint';
    /**
     * @deprecated Geometry classes have been replaced by creof/geo
     */
    const MULTILINESTRING    = 'MultiLineString';
    /**
     * @deprecated Geometry classes have been replaced by creof/geo
     */
    const MULTIPOLYGON       = 'MultiPolygon';
    /**
     * @deprecated Geometry classes have been replaced by creof/geo
     */
    const GEOMETRYCOLLECTION = 'GeometryCollection';

    /**
     * @return string
     *
     * @deprecated Geometry classes have been replaced by creof/geo
     */
    public function getType();
}
