<?php
/**
 * Copyright (C) 2012, 2014 Derek J. Lambert
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

namespace CrEOF\Spatial\PHP\Types;

use CrEOF\Spatial\Exception\InvalidValueException;

/**
 * Abstract LineString object for LINESTRING spatial types
 *
 * @author     Derek J. Lambert <dlambert@dereklambert.com>
 * @license    http://dlambert.mit-license.org MIT
 * @deprecated Geometry classes have been replaced by creof/geo
 */
abstract class AbstractLineString extends AbstractMultiPoint
{
    /**
     * @return string
     *
     * @deprecated Geometry classes have been replaced by creof/geo
     */
    public function getType()
    {
        return self::LINESTRING;
    }

    /**
     * @return bool
     *
     * @deprecated Geometry classes have been replaced by creof/geo
     */
    public function isClosed()
    {
        if ($this->points[0] === $this->points[count($this->points) - 1]) {
            return true;
        }

        return false;
    }
}
