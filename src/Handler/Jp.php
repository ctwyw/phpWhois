<?php
/**
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2
 * @license
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
 * @link http://phpwhois.pw
 * @copyright Copyright (c) 2016 Dmitry Lukashin
 */

namespace phpWhois\Handler;

use phpWhois\Query;

/**
 * TODO: strip brackets [] around keys
 */
class Jp extends HandlerAbstract
{
    // TODO: No single idea why trailing parentheses is missing but it works
    protected $dateFormat = ['Y/m/d', 'Y/m/d H:i:s (T'];

    //protected $server = 'whois.jprs.jp';

    public function __construct(Query $query, $server = 'whois.jprs.jp')
    {
        parent::__construct($query, $server);

        // Request response in English
        $this->getQuery()->addParam('/e');
    }

    public function splitRow($row, $ignorePrefix = '/^[%]/i', $splitBy = '/(\])/i') {
        return parent::splitRow($row, $ignorePrefix, $splitBy);
    }
}