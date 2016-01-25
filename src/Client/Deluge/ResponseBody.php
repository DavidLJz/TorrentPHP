<?php
/**
 * Created by PhpStorm.
 * User: mikeodom
 * Date: 1/24/16
 * Time: 7:24 PM
 */

namespace TorrentPHP\Client\Deluge;


/**
 * Class Response
 * @package TorrentPHP\Client\Deluge
 *
 * Data comes back from Deluge in a JSON string like this
 *      {"id": 970189318, "result": "46a1d7979aff458d23601af7ecc342db06acabcd", "error": null}
 */
class ResponseBody
{
    //The id of this response, generated by the server
    public $id;

    //Data on success
    public $result;

    //Data on fail
    public $error;

    public function __construct($body)
    {
        $json = json_decode($body);

        $this->id = $json->id;
        $this->result = $json->result;
        $this->error = $json->error;
    }
}