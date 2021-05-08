<?php

namespace App\Http\Controllers\ARP;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CompOS\Talker\Talker;
use App\CompOS\Util\SentenceUtil;




class ArpController extends Controller
{
    
    private $talker;

    function __construct(Talker $talker) {
        $this->talker = $talker;
    }


    public function getAll() {
        $sentence = new SentenceUtil();
        $sentence->fromCommand("/ip/arp/getall");
        $this->talker->send($sentence);
        $rs = $this->talker->getResult();
        $i = 0;
        if ($i < $rs->size()) {
            return response()->json($rs->getResultArray());
            return $rs->getResultArray();
        } else {
            return "No Ip ARP To Set, Please Your Add Ip ARP";
        }


    }

    public function detail($id) {
        $sentence = new SentenceUtil();
        $sentence->fromCommand("/ip/arp/print");
        $sentence->where(".id", "=", $id);
        $this->talker->send($sentence);
        $rs = $this->talker->getResult();
        $i = 0;
        if ($i < $rs->size()) {
            return $rs->getResultArray();
        } else {
            return "No Ip ARP With This id = " . $id;
        }
    }

    public function disable($id) {
        $sentence = new SentenceUtil();
        $sentence->addCommand("/ip/arp/disable");
        $sentence->where(".id", "=", $id);
        $disable = $this->talker->send($sentence);
        return "Sucsess";
    }

    public function enable($id) {
        $sentence = new SentenceUtil();
        $sentence->addCommand("/ip/arp/enable");
        $sentence->where(".id", "=", $id);
        $enable = $this->talker->send($sentence);
        return "Sucsess";
    }

}
