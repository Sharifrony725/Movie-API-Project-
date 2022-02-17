<?php
 function sendSuccessResponse($data, $msg = 'Data Retrive Successfully' , $code = 200 ){
    return response()->json([
        'success' => true,
        'msg' => $msg,
        'code' => $code,
        'result' => $data
    ] , $code);
 }
 function sendErrorResponse($data=[] , $msg = 'Something Went wrong!' , $code = 500 ){
    return response()->json([
        'success' => false,
        'msg' => $msg,
        'code' => $code,
        'result' => $data
    ] , $code);
 }
