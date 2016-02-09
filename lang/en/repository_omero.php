<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'repository_omero', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   repository_omero
 * @copyright 2010 Dongsheng Cai
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

# general
$string['pluginname'] = 'Omero';
$string['configplugin'] = 'Configurazione Repository Omero';
$string['omero_restendpoint'] = 'Ome-Seadragon REST API EndPoint';

# API authentication and authorization
$string['apikey'] = 'omero API key';
$string['omero'] = 'omero';
$string['secret'] = 'omero secret';
# TODO: to be updated
$string['instruction'] = 'You can get your API Key and secret from <pre>OMERO API Endpoint>/apps</pre>.';

# cache definition
$string['cachedef_repository_info_cache'] = "Session cache for queries to the OmeSeadraon Rest API";
$string['cachedef_thumbnail_cache'] = "Application cache to optimize retrieval of omeseadragon thumbnails";

# cache settings
$string['cachelimit'] = 'Cache limit';
$string['cachelimit_info'] = 'Enter the maximum size of files (in bytes) to be cached on server for omero aliases/shortcuts. Cached files will be served when the source is no longer available. Empty value or zero mean caching of all files regardless of size.';

# UI strings
$string['current_image'] = "Current image";
$string['choose_image'] = "Choose an image";
$string['omero:view'] = 'View a omero folder';
