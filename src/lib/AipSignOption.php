<?php
/**
 * Created by Baidu-Image-Classify.
 * User: clk
 * Date: 2019/1/7
 * Time: 11:05
 * @author clk@eubchain.com
 */

namespace clk528\ImageClassify\lib;


class AipSignOption
{
    const EXPIRATION_IN_SECONDS = 'expirationInSeconds';

    const HEADERS_TO_SIGN = 'headersToSign';

    const TIMESTAMP = 'timestamp';

    const DEFAULT_EXPIRATION_IN_SECONDS = 1800;

    const MIN_EXPIRATION_IN_SECONDS = 300;

    const MAX_EXPIRATION_IN_SECONDS = 129600;
}