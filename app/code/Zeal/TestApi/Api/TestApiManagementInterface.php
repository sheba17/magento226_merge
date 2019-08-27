<?php

namespace Zeal\TestApi\Api;

interface TestApiManagementInterface
{
	/**
     * get test Api data.
     *
     * @api
     *
     * @param int $id
     *
     * @return \Zeal\TestApi\Api\Data\TestApiInterface
     */
    public function getApiData($id);
}