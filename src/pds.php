<?php

// This file is auto-generated, don't edit it. Thanks.
namespace Aliyun\PDS\SDK;

use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Exception\TeaError;
use Aliyun\PDS\Credentials\PDSCredentials;
use AlibabaCloud\Credentials\Credential;
use \Exception;
use AlibabaCloud\Tea\Exception\TeaUnableRetryError;
use AlibabaCloud\Tea\Tea;
use AlibabaCloud\Tea\Request;
use AlibabaCloud\Tea\RoaUtils\RoaUtils;

use Aliyun\PDS\Credentials\PDSCredentials\Config;
use Aliyun\PDS\SDK\Models\CancelLinkRequest;
use Aliyun\PDS\SDK\Models\RuntimeOptions;
use Aliyun\PDS\SDK\Models\CancelLinkModel;
use Aliyun\PDS\SDK\Models\ConfirmLinkRequest;
use Aliyun\PDS\SDK\Models\ConfirmLinkModel;
use Aliyun\PDS\SDK\Models\DefaultChangePasswordRequest;
use Aliyun\PDS\SDK\Models\ChangePasswordModel;
use Aliyun\PDS\SDK\Models\DefaultSetPasswordRequest;
use Aliyun\PDS\SDK\Models\SetPasswordModel;
use Aliyun\PDS\SDK\Models\VerifyCodeRequest;
use Aliyun\PDS\SDK\Models\VerifyCodeModel;
use Aliyun\PDS\SDK\Models\GetAccessTokenByLinkInfoRequest;
use Aliyun\PDS\SDK\Models\GetAccessTokenByLinkInfoModel;
use Aliyun\PDS\SDK\Models\GetCaptchaRequest;
use Aliyun\PDS\SDK\Models\GetCaptchaModel;
use Aliyun\PDS\SDK\Models\GetByLinkInfoRequest;
use Aliyun\PDS\SDK\Models\GetLinkInfoModel;
use Aliyun\PDS\SDK\Models\GetLinkInfoByUserIDRequest;
use Aliyun\PDS\SDK\Models\GetLinkInfoByUserIdModel;
use Aliyun\PDS\SDK\Models\GetPublicKeyRequest;
use Aliyun\PDS\SDK\Models\GetPublicKeyModel;
use Aliyun\PDS\SDK\Models\AccountLinkRequest;
use Aliyun\PDS\SDK\Models\LinkModel;
use Aliyun\PDS\SDK\Models\MobileCheckExistRequest;
use Aliyun\PDS\SDK\Models\CheckExistModel;
use Aliyun\PDS\SDK\Models\MobileLoginRequest;
use Aliyun\PDS\SDK\Models\LoginModel;
use Aliyun\PDS\SDK\Models\MobileRegisterRequest;
use Aliyun\PDS\SDK\Models\RegisterModel;
use Aliyun\PDS\SDK\Models\MobileSendSmsCodeRequest;
use Aliyun\PDS\SDK\Models\MobileSendSmsCodeModel;
use Aliyun\PDS\SDK\Models\RevokeRequest;
use Aliyun\PDS\SDK\Models\AccountRevokeModel;
use Aliyun\PDS\SDK\Models\AccountTokenRequest;
use Aliyun\PDS\SDK\Models\AccountTokenModel;
use Aliyun\PDS\SDK\Models\AdminListStoresRequest;
use Aliyun\PDS\SDK\Models\AdminListStoresModel;
use Aliyun\PDS\SDK\Models\CreateSubdomainRequest;
use Aliyun\PDS\SDK\Models\CreateSubdomainModel;
use Aliyun\PDS\SDK\Models\DeleteSubdomainRequest;
use Aliyun\PDS\SDK\Models\DeleteSubdomainModel;
use Aliyun\PDS\SDK\Models\GetSubdomainRequest;
use Aliyun\PDS\SDK\Models\GetSubdomainModel;
use Aliyun\PDS\SDK\Models\ListSubdomainsRequest;
use Aliyun\PDS\SDK\Models\ListSubdomainsModel;
use Aliyun\PDS\SDK\Models\UpdateSubdomainRequest;
use Aliyun\PDS\SDK\Models\UpdateSubdomainModel;
use Aliyun\PDS\SDK\Models\GetUserAccessTokenRequest;
use Aliyun\PDS\SDK\Models\GetUserAccessTokenModel;
use Aliyun\PDS\SDK\Models\GetAsyncTaskRequest;
use Aliyun\PDS\SDK\Models\GetAsyncTaskInfoModel;
use Aliyun\PDS\SDK\Models\BatchRequest;
use Aliyun\PDS\SDK\Models\BatchOperationModel;
use Aliyun\PDS\SDK\Models\CreateDriveRequest;
use Aliyun\PDS\SDK\Models\CreateDriveModel;
use Aliyun\PDS\SDK\Models\DeleteDriveRequest;
use Aliyun\PDS\SDK\Models\DeleteDriveModel;
use Aliyun\PDS\SDK\Models\GetDriveRequest;
use Aliyun\PDS\SDK\Models\GetDriveModel;
use Aliyun\PDS\SDK\Models\GetDefaultDriveRequest;
use Aliyun\PDS\SDK\Models\GetDefaultDriveModel;
use Aliyun\PDS\SDK\Models\ListDriveRequest;
use Aliyun\PDS\SDK\Models\ListDrivesModel;
use Aliyun\PDS\SDK\Models\ListMyDriveRequest;
use Aliyun\PDS\SDK\Models\ListMyDrivesModel;
use Aliyun\PDS\SDK\Models\UpdateDriveRequest;
use Aliyun\PDS\SDK\Models\UpdateDriveModel;
use Aliyun\PDS\SDK\Models\CompleteFileRequest;
use Aliyun\PDS\SDK\Models\CompleteFileModel;
use Aliyun\PDS\SDK\Models\CopyFileRequest;
use Aliyun\PDS\SDK\Models\CopyFileModel;
use Aliyun\PDS\SDK\Models\CreateFileRequest;
use Aliyun\PDS\SDK\Models\CreateFileModel;
use Aliyun\PDS\SDK\Models\DeleteFileRequest;
use Aliyun\PDS\SDK\Models\DeleteFileModel;
use Aliyun\PDS\SDK\Models\GetFileRequest;
use Aliyun\PDS\SDK\Models\GetFileModel;
use Aliyun\PDS\SDK\Models\GetFileByPathRequest;
use Aliyun\PDS\SDK\Models\GetFileByPathModel;
use Aliyun\PDS\SDK\Models\GetDownloadUrlRequest;
use Aliyun\PDS\SDK\Models\GetDownloadUrlModel;
use Aliyun\PDS\SDK\Models\GetLastCursorRequest;
use Aliyun\PDS\SDK\Models\GetLastCursorModel;
use Aliyun\PDS\SDK\Models\GetMediaPlayURLRequest;
use Aliyun\PDS\SDK\Models\GetMediaPlayUrlModel;
use Aliyun\PDS\SDK\Models\GetOfficeEditUrlRequest;
use Aliyun\PDS\SDK\Models\GetOfficeEditUrlModel;
use Aliyun\PDS\SDK\Models\GetOfficePreviewUrlRequest;
use Aliyun\PDS\SDK\Models\GetOfficePreviewUrlModel;
use Aliyun\PDS\SDK\Models\GetUploadUrlRequest;
use Aliyun\PDS\SDK\Models\GetUploadUrlModel;
use Aliyun\PDS\SDK\Models\GetVideoPreviewSpriteURLRequest;
use Aliyun\PDS\SDK\Models\GetVideoPreviewSpriteUrlModel;
use Aliyun\PDS\SDK\Models\GetVideoPreviewURLRequest;
use Aliyun\PDS\SDK\Models\GetVideoPreviewUrlModel;
use Aliyun\PDS\SDK\Models\ListFileRequest;
use Aliyun\PDS\SDK\Models\ListFileModel;
use Aliyun\PDS\SDK\Models\ListFileActivityRequest;
use Aliyun\PDS\SDK\Models\ListFileActivityModel;
use Aliyun\PDS\SDK\Models\ListByAnonymousRequest;
use Aliyun\PDS\SDK\Models\ListFileByAnonymousModel;
use Aliyun\PDS\SDK\Models\ListFileByCustomIndexKeyRequest;
use Aliyun\PDS\SDK\Models\ListFileByCustomIndexKeyModel;
use Aliyun\PDS\SDK\Models\ListFileDeltaRequest;
use Aliyun\PDS\SDK\Models\ListFileDeltaModel;
use Aliyun\PDS\SDK\Models\ListUploadedPartRequest;
use Aliyun\PDS\SDK\Models\ListUploadedPartsModel;
use Aliyun\PDS\SDK\Models\MoveFileRequest;
use Aliyun\PDS\SDK\Models\MoveFileModel;
use Aliyun\PDS\SDK\Models\RefreshOfficeEditTokenRequest;
use Aliyun\PDS\SDK\Models\TokenModel;
use Aliyun\PDS\SDK\Models\ScanFileMetaRequest;
use Aliyun\PDS\SDK\Models\ScanFileMetaModel;
use Aliyun\PDS\SDK\Models\SearchFileRequest;
use Aliyun\PDS\SDK\Models\SearchFileModel;
use Aliyun\PDS\SDK\Models\UpdateFileMetaRequest;
use Aliyun\PDS\SDK\Models\UpdateFileModel;
use Aliyun\PDS\SDK\Models\CreateShareRequest;
use Aliyun\PDS\SDK\Models\CreateShareModel;
use Aliyun\PDS\SDK\Models\DeleteShareRequest;
use Aliyun\PDS\SDK\Models\DeleteShareModel;
use Aliyun\PDS\SDK\Models\GetShareRequest;
use Aliyun\PDS\SDK\Models\GetShareModel;
use Aliyun\PDS\SDK\Models\ListShareRequest;
use Aliyun\PDS\SDK\Models\ListShareModel;
use Aliyun\PDS\SDK\Models\UpdateShareRequest;
use Aliyun\PDS\SDK\Models\UpdateShareModel;
use Aliyun\PDS\SDK\Models\CancelShareLinkRequest;
use Aliyun\PDS\SDK\Models\CancelShareLinkModel;
use Aliyun\PDS\SDK\Models\CreateShareLinkRequest;
use Aliyun\PDS\SDK\Models\CreateShareLinkModel;
use Aliyun\PDS\SDK\Models\GetShareLinkRequest;
use Aliyun\PDS\SDK\Models\GetShareLinkModel;
use Aliyun\PDS\SDK\Models\GetShareLinkByAnonymousRequest;
use Aliyun\PDS\SDK\Models\GetShareByAnonymousModel;
use Aliyun\PDS\SDK\Models\GetShareLinkIDRequest;
use Aliyun\PDS\SDK\Models\GetShareIdModel;
use Aliyun\PDS\SDK\Models\GetShareLinkTokenRequest;
use Aliyun\PDS\SDK\Models\GetShareTokenModel;
use Aliyun\PDS\SDK\Models\ListShareLinkRequest;
use Aliyun\PDS\SDK\Models\ListShareLinkModel;
use Aliyun\PDS\SDK\Models\UpdateShareLinkRequest;
use Aliyun\PDS\SDK\Models\UpdateShareLinkModel;
use Aliyun\PDS\SDK\Models\CreateGroupRequest;
use Aliyun\PDS\SDK\Models\CreateGroupModel;
use Aliyun\PDS\SDK\Models\DeleteGroupRequest;
use Aliyun\PDS\SDK\Models\DeleteGroupModel;
use Aliyun\PDS\SDK\Models\GetGroupRequest;
use Aliyun\PDS\SDK\Models\GetGroupModel;
use Aliyun\PDS\SDK\Models\ListGroupRequest;
use Aliyun\PDS\SDK\Models\ListGroupModel;
use Aliyun\PDS\SDK\Models\SearchGroupRequest;
use Aliyun\PDS\SDK\Models\SearchGroupModel;
use Aliyun\PDS\SDK\Models\UpdateGroupRequest;
use Aliyun\PDS\SDK\Models\UpdateGroupModel;
use Aliyun\PDS\SDK\Models\CreateMembershipRequest;
use Aliyun\PDS\SDK\Models\CreateMembershipModel;
use Aliyun\PDS\SDK\Models\DeleteMembershipRequest;
use Aliyun\PDS\SDK\Models\DeleteMembershipModel;
use Aliyun\PDS\SDK\Models\GetMembershipRequest;
use Aliyun\PDS\SDK\Models\GetMembershipModel;
use Aliyun\PDS\SDK\Models\HasMemberRequest;
use Aliyun\PDS\SDK\Models\HasMemberModel;
use Aliyun\PDS\SDK\Models\ListDirectChildMembershipsRequest;
use Aliyun\PDS\SDK\Models\ListDirectChildMembershipsModel;
use Aliyun\PDS\SDK\Models\ListDirectParentMembershipsRequest;
use Aliyun\PDS\SDK\Models\ListDirectMembershipsModel;
use Aliyun\PDS\SDK\Models\ListDirectParentMembershipsModel;
use Aliyun\PDS\SDK\Models\UpdateMembershipRequest;
use Aliyun\PDS\SDK\Models\UpdateMembershipModel;
use Aliyun\PDS\SDK\Models\AddUserToSubdomainRequest;
use Aliyun\PDS\SDK\Models\AddUserToSubdomainModel;
use Aliyun\PDS\SDK\Models\CreateUserRequest;
use Aliyun\PDS\SDK\Models\CreateUserModel;
use Aliyun\PDS\SDK\Models\DeleteUserRequest;
use Aliyun\PDS\SDK\Models\DeleteUserModel;
use Aliyun\PDS\SDK\Models\GetUserRequest;
use Aliyun\PDS\SDK\Models\GetUserModel;
use Aliyun\PDS\SDK\Models\ListUserRequest;
use Aliyun\PDS\SDK\Models\ListUsersModel;
use Aliyun\PDS\SDK\Models\RemoveUserFromSubdomainRequest;
use Aliyun\PDS\SDK\Models\RemoveUserFromSubdomainModel;
use Aliyun\PDS\SDK\Models\SearchUserRequest;
use Aliyun\PDS\SDK\Models\SearchUserModel;
use Aliyun\PDS\SDK\Models\UpdateUserRequest;
use Aliyun\PDS\SDK\Models\UpdateUserModel;
use Aliyun\PDS\SDK\Models\CreateStoryRequest;
use Aliyun\PDS\SDK\Models\CreateStoryModel;
use Aliyun\PDS\SDK\Models\GetImageCountRequest;
use Aliyun\PDS\SDK\Models\GetPhotoCountModel;
use Aliyun\PDS\SDK\Models\GetStoryDetailRequest;
use Aliyun\PDS\SDK\Models\GetStoryDetailModel;
use Aliyun\PDS\SDK\Models\ListImageAddressGroupsRequest;
use Aliyun\PDS\SDK\Models\ListAddressGroupsModel;
use Aliyun\PDS\SDK\Models\ListImageFaceGroupsRequest;
use Aliyun\PDS\SDK\Models\ListFacegroupsModel;
use Aliyun\PDS\SDK\Models\ListStoryRequest;
use Aliyun\PDS\SDK\Models\ListStoryModel;
use Aliyun\PDS\SDK\Models\ListImageTagsRequest;
use Aliyun\PDS\SDK\Models\ListTagsModel;
use Aliyun\PDS\SDK\Models\ParseKeywordsRequest;
use Aliyun\PDS\SDK\Models\ParseKeywordsModel;
use Aliyun\PDS\SDK\Models\RemoveStoryImagesRequest;
use Aliyun\PDS\SDK\Models\RemoveStoryImagesModel;
use Aliyun\PDS\SDK\Models\SearchImageAddressGroupsRequest;
use Aliyun\PDS\SDK\Models\SearchAddressGroupsModel;
use Aliyun\PDS\SDK\Models\UpdateFaceGroupInfoRequest;
use Aliyun\PDS\SDK\Models\UpdateFacegroupInfoModel;

/**
 * *
 */
class pds {
    protected $_domainId;

    protected $_accessTokenCredential;

    protected $_endpoint;

    protected $_protocol;

    protected $_nickname;

    protected $_userAgent;

    protected $_credential;

    public function __construct($config){
        if (Utils::isUnset($config)) {
            throw new TeaError([
                "name" => "ParameterMissing",
                "message" => "'config' can not be unset"
            ]);
        }
        Utils::validateModel($config);
        if (!Utils::empty_($config->accessToken) || !Utils::empty_($config->refreshToken)) {
            $accessConfig = new Config([
                "accessToken" => $config->accessToken,
                "endpoint" => $config->endpoint,
                "domainId" => $config->domainId,
                "clientId" => $config->clientId,
                "refreshToken" => $config->refreshToken,
                "clientSecret" => $config->clientSecret,
                "expireTime" => $config->expireTime
            ]);
            $this->_accessTokenCredential = new PDSCredentials($accessConfig);
        }
        if (!Utils::empty_($config->accessKeyId)) {
            if (Utils::empty_($config->type)) {
                $config->type = "access_key";
            }
            $credentialConfig = new \AlibabaCloud\Credentials\Credential\Config([
                "accessKeyId" => $config->accessKeyId,
                "type" => $config->type,
                "accessKeySecret" => $config->accessKeySecret,
                "securityToken" => $config->securityToken
            ]);
            $this->_credential = new Credential($credentialConfig);
        }
        $this->_endpoint = $config->endpoint;
        $this->_protocol = $config->protocol;
        $this->_userAgent = $config->userAgent;
        $this->_nickname = $config->nickname;
        $this->_domainId = $config->domainId;
    }

    /**
     * 取消绑定关系，生成新用户，返回访问令牌
     * @tags account
     * @error InvalidParameterMissing The input parameter {parameter_name} is missing.
     * @error Forbidden User not authorized to operate on the specified APIs.
     * @error InternalError The request has been failed due to some unknown error.
     * @param CancelLinkRequest $request
     * @param RuntimeOptions $runtime
     * @return CancelLinkModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function cancelLinkEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/account/cancel_link");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".auth.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return CancelLinkModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 确认绑定关系, 成功后返回访问令牌
     * @tags account
     * @error InvalidParameterMissing The input parameter {parameter_name} is missing.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @param ConfirmLinkRequest $request
     * @param RuntimeOptions $runtime
     * @return ConfirmLinkModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function confirmLinkEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/account/confirm_link");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".auth.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return ConfirmLinkModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 修改手机登录密码，密码必须包含数字和字母，长度8-20个字符
     * @tags account
     * @error InvalidParameterMissing The input parameter {parameter_name} is missing.
     * @error Forbidden User not authorized to operate on the specified APIs.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @param DefaultChangePasswordRequest $request
     * @param RuntimeOptions $runtime
     * @return ChangePasswordModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function changePasswordEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/account/default/change_password");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".auth.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return ChangePasswordModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 设置手机登录密码，密码必须包含数字和字母，长度8-20个字符
     * @tags account
     * @error InvalidParameterMissing The input parameter {parameter_name} is missing.
     * @error Forbidden User not authorized to operate on the specified APIs.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @param DefaultSetPasswordRequest $request
     * @param RuntimeOptions $runtime
     * @return SetPasswordModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function setPasswordEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/account/default/set_password");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".auth.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 204)) {
                    return SetPasswordModel::fromMap([
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 校验手机短信验证码，用于重置密码时校验手机，通过校验后返回state，可通过state重新设置密码
     * @tags account
     * @error InvalidParameterMissing The input parameter {parameter_name} is missing.
     * @error Forbidden User not authorized to operate on the specified APIs.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @param VerifyCodeRequest $request
     * @param RuntimeOptions $runtime
     * @return VerifyCodeModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function verifyCodeEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/account/default/verify_code");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".auth.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return VerifyCodeModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 管理员通过账号信息直接获取用户的访问令牌
     * @tags account
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error Forbidden User not authorized to operate on the specified APIs.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @param GetAccessTokenByLinkInfoRequest $request
     * @param RuntimeOptions $runtime
     * @return GetAccessTokenByLinkInfoModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function getAccessTokenByLinkInfoEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/account/get_access_token_by_link_info");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".auth.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return GetAccessTokenByLinkInfoModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 获取图片验证码，用于人机校验，默认不需要
     * @tags account
     * @error InvalidParameterMissing The input parameter {parameter_name} is missing.
     * @error Forbidden User not authorized to operate on the specified APIs.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @param GetCaptchaRequest $request
     * @param RuntimeOptions $runtime
     * @return GetCaptchaModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function getCaptchaEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/account/get_captcha");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".auth.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return GetCaptchaModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 获取用户认证方式详情
     * @tags account
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error Forbidden User not authorized to operate on the specified APIs.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @param GetByLinkInfoRequest $request
     * @param RuntimeOptions $runtime
     * @return GetLinkInfoModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function getLinkInfoEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/account/get_link_info");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".auth.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return GetLinkInfoModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 获取用户的所有绑定信息
     * @tags account
     * @error InvalidParameterMissing The input parameter {parameter_name} is missing.
     * @error Forbidden User not authorized to operate on the specified APIs.
     * @error InternalError The request has been failed due to some unknown error.
     * @param GetLinkInfoByUserIDRequest $request
     * @param RuntimeOptions $runtime
     * @return GetLinkInfoByUserIdModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function getLinkInfoByUserIdEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/account/get_link_info_by_user_id");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".auth.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return GetLinkInfoByUserIdModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 获取公钥，用于加密对称密钥
     * @tags account
     * @error InvalidParameterMissing The input parameter {parameter_name} is missing.
     * @error Forbidden User not authorized to operate on the specified APIs.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @param GetPublicKeyRequest $request
     * @param RuntimeOptions $runtime
     * @return GetPublicKeyModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function getPublicKeyEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/account/get_public_key");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".auth.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return GetPublicKeyModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 绑定用户认证方式
     * @tags account
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error Forbidden User not authorized to operate on the specified APIs.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error AlreadyExist {resource} has already exists. {extra_msg}
     * @error InternalError The request has been failed due to some unknown error.
     * @param AccountLinkRequest $request
     * @param RuntimeOptions $runtime
     * @return LinkModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function linkEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/account/link");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".auth.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return LinkModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 查询手机号是否已被注册
     * @tags account
     * @error InvalidParameterMissing The input parameter {parameter_name} is missing.
     * @error Forbidden User not authorized to operate on the specified APIs.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @param MobileCheckExistRequest $request
     * @param RuntimeOptions $runtime
     * @return CheckExistModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function checkExistEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/account/mobile/check_exist");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".auth.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return CheckExistModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 通过手机号+短信或密码登录，返回刷新令牌和访问令牌
     * @tags account
     * @error InvalidParameterMissing The input parameter {parameter_name} is missing.
     * @error Forbidden User not authorized to operate on the specified APIs.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @param MobileLoginRequest $request
     * @param RuntimeOptions $runtime
     * @return LoginModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function loginEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/account/mobile/login");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".auth.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return LoginModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 通过手机号+短信验证码注册账号
     * @tags account
     * @error InvalidParameterMissing The input parameter {parameter_name} is missing.
     * @error Forbidden User not authorized to operate on the specified APIs.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error AlreadyExist {resource} has already exists. {extra_msg}
     * @error InternalError The request has been failed due to some unknown error.
     * @param MobileRegisterRequest $request
     * @param RuntimeOptions $runtime
     * @return RegisterModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function registerEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/account/mobile/register");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".auth.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return RegisterModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 发送短信验证码，用于登录、注册、修改密码、绑定等
     * @tags account
     * @error InvalidParameterMissing The input parameter {parameter_name} is missing.
     * @error Forbidden User not authorized to operate on the specified APIs.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @param MobileSendSmsCodeRequest $request
     * @param RuntimeOptions $runtime
     * @return MobileSendSmsCodeModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function mobileSendSmsCodeEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/account/mobile/send_sms_code");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".auth.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return MobileSendSmsCodeModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 用户退出登录
     * @tags account
     * @error InvalidParameterMissing The input parameter {parameter_name} is missing.
     * @error Forbidden User not authorized to operate on the specified APIs.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @param RevokeRequest $request
     * @param RuntimeOptions $runtime
     * @return AccountRevokeModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function accountRevokeEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/account/revoke");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".auth.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 204)) {
                    return AccountRevokeModel::fromMap([
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 用户通过刷新令牌（refresh_token）获取访问令牌（access_token）
     * @tags account
     * @error InvalidParameterMissing The input parameter {parameter_name} is missing.
     * @error Forbidden User not authorized to operate on the specified APIs.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @param AccountTokenRequest $request
     * @param RuntimeOptions $runtime
     * @return AccountTokenModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function accountTokenEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/account/token");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".auth.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return AccountTokenModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 列举Store列表
     * @tags admin
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error Forbidden User not authorized to operate on the specified APIs.
     * @error InternalError The request has been failed due to some unknown error.
     * @param AdminListStoresRequest $request
     * @param RuntimeOptions $runtime
     * @return AdminListStoresModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function adminListStoresEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/domain/list_stores");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return AdminListStoresModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * create subdomain
     * @tags subdomain
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error Forbidden User not authorized to operate on the specified APIs.
     * @error InternalError The request has been failed due to some unknown error.
     * @param CreateSubdomainRequest $request
     * @param RuntimeOptions $runtime
     * @return CreateSubdomainModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function createSubdomainEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/subdomain/create");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return CreateSubdomainModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * delete subdomain
     * @tags subdomain
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error Forbidden User not authorized to operate on the specified APIs.
     * @error InternalError The request has been failed due to some unknown error.
     * @param DeleteSubdomainRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteSubdomainModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function deleteSubdomainEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/subdomain/delete");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return DeleteSubdomainModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * get subdomain
     * @tags subdomain
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error Forbidden User not authorized to operate on the specified APIs.
     * @error InternalError The request has been failed due to some unknown error.
     * @param GetSubdomainRequest $request
     * @param RuntimeOptions $runtime
     * @return GetSubdomainModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function getSubdomainEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/subdomain/get");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return GetSubdomainModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * list subdomain
     * @tags subdomain
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error Forbidden User not authorized to operate on the specified APIs.
     * @error InternalError The request has been failed due to some unknown error.
     * @param ListSubdomainsRequest $request
     * @param RuntimeOptions $runtime
     * @return ListSubdomainsModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function listSubdomainsEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/subdomain/list");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return ListSubdomainsModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * update subdomain
     * @tags subdomain
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error Forbidden User not authorized to operate on the specified APIs.
     * @error InternalError The request has been failed due to some unknown error.
     * @param UpdateSubdomainRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateSubdomainModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function updateSubdomainEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/subdomain/update");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return UpdateSubdomainModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 获取用户的accessToken
     * @tags admin
     * @error undefined undefined
     * @error undefined undefined
     * @error undefined undefined
     * @error undefined undefined
     * @error undefined undefined
     * @param GetUserAccessTokenRequest $request
     * @param RuntimeOptions $runtime
     * @return GetUserAccessTokenModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function getUserAccessTokenEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/user/get_access_token");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return GetUserAccessTokenModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 如果目录拷贝、目录删除不能在限定时间内完成，将访问一个异步任务id，
     * 通过此接口获取异步任务的信息，以确定任务是否执行成功。
     * @tags async_task
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param GetAsyncTaskRequest $request
     * @param RuntimeOptions $runtime
     * @return GetAsyncTaskInfoModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function getAsyncTaskInfoEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/async_task/get");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return GetAsyncTaskInfoModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 对多个原子操作封装成一个批处理请求，服务端并行处理并打包返回每个操作的执行结果。
     * 支持对文件和文件夹的移动、删除、修改，每个批处理请求最多包含100个原则操作。
     * @tags batch
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param BatchRequest $request
     * @param RuntimeOptions $runtime
     * @return BatchOperationModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function batchOperationEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/batch");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return BatchOperationModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 支持normal和large两种drive，
     * large类型的drive用于文件数多的场景，不支持list操作，
     * 当drive的文件数量大于1亿时，建议使用large类型。
     * @tags drive
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param CreateDriveRequest $request
     * @param RuntimeOptions $runtime
     * @return CreateDriveModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function createDriveEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/drive/create");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 201)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return CreateDriveModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 删除指定drive_id对应的Drive
     * @tags drive
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param DeleteDriveRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteDriveModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function deleteDriveEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/drive/delete");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 204)) {
                    return DeleteDriveModel::fromMap([
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 获取指定drive_id对应的Drive详细信息。
     * @tags drive
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param GetDriveRequest $request
     * @param RuntimeOptions $runtime
     * @return GetDriveModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function getDriveEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/drive/get");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return GetDriveModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 一个用户可拥有多个drive，在创建drive时通过参数指定是否为这个用户的默认drive，
     * 每个用户只能设置一个默认drive。
     * @tags drive
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param GetDefaultDriveRequest $request
     * @param RuntimeOptions $runtime
     * @return GetDefaultDriveModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function getDefaultDriveEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/drive/get_default_drive");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return GetDefaultDriveModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 管理员列举指定用户的Drive
     * @tags drive
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param ListDriveRequest $request
     * @param RuntimeOptions $runtime
     * @return ListDrivesModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function listDrivesEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/drive/list");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return ListDrivesModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 列举当前用户（访问令牌）的Drive
     * @tags drive
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param ListMyDriveRequest $request
     * @param RuntimeOptions $runtime
     * @return ListMyDrivesModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function listMyDrivesEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/drive/list_my_drives");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return ListMyDrivesModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 更新指定drive_id的Drive信息
     * @tags drive
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param UpdateDriveRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateDriveModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function updateDriveEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/drive/update");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return UpdateDriveModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 完成文件上传。
     * @tags file
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param CompleteFileRequest $request
     * @param RuntimeOptions $runtime
     * @return CompleteFileModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function completeFileEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/file/complete");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return CompleteFileModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 指定源文件或文件夹，拷贝到指定的文件夹。
     * @tags file
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param CopyFileRequest $request
     * @param RuntimeOptions $runtime
     * @return CopyFileModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function copyFileEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/file/copy");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 201)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return CopyFileModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (Utils::equalNumber($_response->statusCode, 202)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return CopyFileModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 在指定文件夹下创建文件或者文件夹，
     * 根文件夹用root表示，其他文件夹使用创建文件夹时返回的file_id。
     * @tags file
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error AlreadyExist {resource} has already exists. {extra_msg}
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param CreateFileRequest $request
     * @param RuntimeOptions $runtime
     * @return CreateFileModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function createFileEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/file/create");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 201)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return CreateFileModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 指定文件或文件夹ID，删除文件或者文件夹。
     * @tags file
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param DeleteFileRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteFileModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function deleteFileEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/file/delete");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 202)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return DeleteFileModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (Utils::equalNumber($_response->statusCode, 204)) {
                    return DeleteFileModel::fromMap([
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 获取指定文件或文件夹ID的信息。
     * @tags file
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param GetFileRequest $request
     * @param RuntimeOptions $runtime
     * @return GetFileModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function getFileEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/file/get");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return GetFileModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 根据路径获取指定文件或文件夹的信息。
     * @tags file
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param GetFileByPathRequest $request
     * @param RuntimeOptions $runtime
     * @return GetFileByPathModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function getFileByPathEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/file/get_by_path");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return GetFileByPathModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 获取文件的下载地址，调用者可自己设置range头并发下载。
     * @tags file
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param GetDownloadUrlRequest $request
     * @param RuntimeOptions $runtime
     * @return GetDownloadUrlModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function getDownloadUrlEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/file/get_download_url");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return GetDownloadUrlModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 获取drive内，增量数据最新的游标
     * @tags file_delta
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param GetLastCursorRequest $request
     * @param RuntimeOptions $runtime
     * @return GetLastCursorModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function getLastCursorEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/file/get_last_cursor");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return GetLastCursorModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 获取media文件播放URL地址（当前仅支持m3u8）
     * @tags file
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param GetMediaPlayURLRequest $request
     * @param RuntimeOptions $runtime
     * @return GetMediaPlayUrlModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function getMediaPlayUrlEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/file/get_media_play_url");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return GetMediaPlayUrlModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 获取文档的在线编辑地址
     * @tags file
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param GetOfficeEditUrlRequest $request
     * @param RuntimeOptions $runtime
     * @return GetOfficeEditUrlModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function getOfficeEditUrlEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/file/get_office_edit_url");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return GetOfficeEditUrlModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 获取文档的预览地址（office文档）
     * @tags file
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param GetOfficePreviewUrlRequest $request
     * @param RuntimeOptions $runtime
     * @return GetOfficePreviewUrlModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function getOfficePreviewUrlEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/file/get_office_preview_url");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return GetOfficePreviewUrlModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 可指定分片信息，一次获取多个分片的上传地址。
     * @tags file
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param GetUploadUrlRequest $request
     * @param RuntimeOptions $runtime
     * @return GetUploadUrlModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function getUploadUrlEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/file/get_upload_url");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return GetUploadUrlModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 获取视频雪碧图地址
     * @tags file
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param GetVideoPreviewSpriteURLRequest $request
     * @param RuntimeOptions $runtime
     * @return GetVideoPreviewSpriteUrlModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function getVideoPreviewSpriteUrlEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/file/get_video_preview_sprite_url");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return GetVideoPreviewSpriteUrlModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 获取视频播放地址
     * @tags file
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param GetVideoPreviewURLRequest $request
     * @param RuntimeOptions $runtime
     * @return GetVideoPreviewUrlModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function getVideoPreviewUrlEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/file/get_video_preview_url");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return GetVideoPreviewUrlModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 列举指定目录下的文件或文件夹。
     * @tags file
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param ListFileRequest $request
     * @param RuntimeOptions $runtime
     * @return ListFileModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function listFileEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/file/list");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return ListFileModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * list file activity
     * @tags file
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param ListFileActivityRequest $request
     * @param RuntimeOptions $runtime
     * @return ListFileActivityModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function listFileActivityEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/file/list_activity");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return ListFileActivityModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 查看分享中的文件列表
     * @tags share_link
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error ShareLinkTokenInvalid ShareToken is invalid. {message}
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param ListByAnonymousRequest $request
     * @param RuntimeOptions $runtime
     * @return ListFileByAnonymousModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function listFileByAnonymousEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/file/list_by_anonymous");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return ListFileByAnonymousModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 根据自定义同步索引键列举文件或文件夹。
     * @tags file
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param ListFileByCustomIndexKeyRequest $request
     * @param RuntimeOptions $runtime
     * @return ListFileByCustomIndexKeyModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function listFileByCustomIndexKeyEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/file/list_by_custom_index_key");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return ListFileByCustomIndexKeyModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 获取drive内，增量数据列表
     * @tags file_delta
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param ListFileDeltaRequest $request
     * @param RuntimeOptions $runtime
     * @return ListFileDeltaModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function listFileDeltaEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/file/list_delta");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return ListFileDeltaModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 列举upload_id对应的已上传分片。
     * @tags file
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param ListUploadedPartRequest $request
     * @param RuntimeOptions $runtime
     * @return ListUploadedPartsModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function listUploadedPartsEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/file/list_uploaded_parts");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return ListUploadedPartsModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 指定源文件或文件夹，移动到指定的文件夹。
     * @tags file
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param MoveFileRequest $request
     * @param RuntimeOptions $runtime
     * @return MoveFileModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function moveFileEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/file/move");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return MoveFileModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 刷新在线编辑Token
     * @tags file, refresh, office, edit
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param RefreshOfficeEditTokenRequest $request
     * @param RuntimeOptions $runtime
     * @return TokenModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function tokenEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/file/refresh_office_edit_token");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return TokenModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 在指定drive下全量获取文件元信息。
     * @tags file
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param ScanFileMetaRequest $request
     * @param RuntimeOptions $runtime
     * @return ScanFileMetaModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function scanFileMetaEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/file/scan");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return ScanFileMetaModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 根据筛选条件，在指定drive下搜索文件。
     * @tags file
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param SearchFileRequest $request
     * @param RuntimeOptions $runtime
     * @return SearchFileModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function searchFileEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/file/search");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return SearchFileModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 对指定的文件或文件夹更新信息。
     * @tags file
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error AlreadyExist {resource} has already exists. {extra_msg}
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param UpdateFileMetaRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateFileModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function updateFileEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/file/update");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return UpdateFileModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 创建共享。
     * @tags share
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param CreateShareRequest $request
     * @param RuntimeOptions $runtime
     * @return CreateShareModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function createShareEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/share/create");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 201)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return CreateShareModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 删除指定共享
     * @tags share
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param DeleteShareRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteShareModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function deleteShareEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/share/delete");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 204)) {
                    return DeleteShareModel::fromMap([
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 获取共享信息。
     * @tags share
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param GetShareRequest $request
     * @param RuntimeOptions $runtime
     * @return GetShareModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function getShareEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/share/get");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return GetShareModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 列举指定用户的共享
     * @tags share
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param ListShareRequest $request
     * @param RuntimeOptions $runtime
     * @return ListShareModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function listShareEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/share/list");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return ListShareModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 修改指定共享
     * @tags share
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param UpdateShareRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateShareModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function updateShareEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/share/update");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return UpdateShareModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 取消指定分享
     * @tags share_link
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param CancelShareLinkRequest $request
     * @param RuntimeOptions $runtime
     * @return CancelShareLinkModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function cancelShareLinkEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/share_link/cancel");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 204)) {
                    return CancelShareLinkModel::fromMap([
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 创建分享。
     * @tags share_link
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param CreateShareLinkRequest $request
     * @param RuntimeOptions $runtime
     * @return CreateShareLinkModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function createShareLinkEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/share_link/create");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 201)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return CreateShareLinkModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 查看分享的所有信息
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param GetShareLinkRequest $request
     * @param RuntimeOptions $runtime
     * @return GetShareLinkModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function getShareLinkEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/share_link/get");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return GetShareLinkModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 查看分享的基本信息，比如分享者、到期时间等
     * @tags share_link
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param GetShareLinkByAnonymousRequest $request
     * @param RuntimeOptions $runtime
     * @return GetShareByAnonymousModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function getShareByAnonymousEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/share_link/get_by_anonymous");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return GetShareByAnonymousModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 使用分享口令换取分享id
     * @tags share_link
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param GetShareLinkIDRequest $request
     * @param RuntimeOptions $runtime
     * @return GetShareIdModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function getShareIdEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/share_link/get_share_id");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return GetShareIdModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 使用分享码+提取码换取分享token
     * @tags share_link
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param GetShareLinkTokenRequest $request
     * @param RuntimeOptions $runtime
     * @return GetShareTokenModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function getShareTokenEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/share_link/get_share_token");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return GetShareTokenModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 列举指定用户的分享
     * @tags share_link
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param ListShareLinkRequest $request
     * @param RuntimeOptions $runtime
     * @return ListShareLinkModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function listShareLinkEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/share_link/list");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return ListShareLinkModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 更新分享。
     * @tags share_link
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param UpdateShareLinkRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateShareLinkModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function updateShareLinkEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/share_link/update");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return UpdateShareLinkModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 创建用户组
     * @tags group
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param CreateGroupRequest $request
     * @param RuntimeOptions $runtime
     * @return CreateGroupModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function createGroupEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/group/create");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 201)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return CreateGroupModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 删除用户组
     * @tags group
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param DeleteGroupRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteGroupModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function deleteGroupEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/group/delete");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return DeleteGroupModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 获取用户组
     * @tags group
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param GetGroupRequest $request
     * @param RuntimeOptions $runtime
     * @return GetGroupModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function getGroupEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/group/get");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return GetGroupModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 列举用户组
     * @tags group
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param ListGroupRequest $request
     * @param RuntimeOptions $runtime
     * @return ListGroupModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function listGroupEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/group/list");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return ListGroupModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 搜索用户组
     * @tags group
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param SearchGroupRequest $request
     * @param RuntimeOptions $runtime
     * @return SearchGroupModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function searchGroupEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/group/search");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return SearchGroupModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 更新用户组
     * @tags group
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param UpdateGroupRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateGroupModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function updateGroupEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/group/update");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return UpdateGroupModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 创建membership
     * @tags membership
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param CreateMembershipRequest $request
     * @param RuntimeOptions $runtime
     * @return CreateMembershipModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function createMembershipEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/membership/create");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 201)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return CreateMembershipModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 删除membership
     * @tags membership
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param DeleteMembershipRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteMembershipModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function deleteMembershipEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/membership/delete");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 204)) {
                    return DeleteMembershipModel::fromMap([
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 获取membership
     * @tags membership
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param GetMembershipRequest $request
     * @param RuntimeOptions $runtime
     * @return GetMembershipModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function getMembershipEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/membership/get");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return GetMembershipModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 检查group是否包含某个member
     * @tags membership
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param HasMemberRequest $request
     * @param RuntimeOptions $runtime
     * @return HasMemberModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function hasMemberEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/membership/has_member");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return HasMemberModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 列举直属的子membership
     * @tags membership
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param ListDirectChildMembershipsRequest $request
     * @param RuntimeOptions $runtime
     * @return ListDirectChildMembershipsModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function listDirectChildMembershipsEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/membership/list_direct_child_memberships");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return ListDirectChildMembershipsModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 列举直属的membership
     * @tags membership
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param ListDirectParentMembershipsRequest $request
     * @param RuntimeOptions $runtime
     * @return ListDirectMembershipsModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function listDirectMembershipsEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/membership/list_direct_memberships");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return ListDirectMembershipsModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 列举直属的父membership
     * @tags membership
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param ListDirectParentMembershipsRequest $request
     * @param RuntimeOptions $runtime
     * @return ListDirectParentMembershipsModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function listDirectParentMembershipsEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/membership/list_direct_parent_memberships");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return ListDirectParentMembershipsModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 更新membership
     * @tags membership
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param UpdateMembershipRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateMembershipModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function updateMembershipEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/membership/update");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return UpdateMembershipModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 只有管理员可以调用
     * @tags user
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param AddUserToSubdomainRequest $request
     * @param RuntimeOptions $runtime
     * @return AddUserToSubdomainModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function addUserToSubdomainEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/user/add_user_to_subdomain");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    return AddUserToSubdomainModel::fromMap([
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 创建用户，只有管理员可以调用
     * @tags user
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param CreateUserRequest $request
     * @param RuntimeOptions $runtime
     * @return CreateUserModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function createUserEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/user/create");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 201)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return CreateUserModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 只有管理员可以调用
     * @tags user
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param DeleteUserRequest $request
     * @param RuntimeOptions $runtime
     * @return DeleteUserModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function deleteUserEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/user/delete");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 204)) {
                    return DeleteUserModel::fromMap([
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 获取用户详细信息，普通用户只能获取自己的信息，管理员可以获取任意用户的信息。
     * @tags user
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param GetUserRequest $request
     * @param RuntimeOptions $runtime
     * @return GetUserModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function getUserEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/user/get");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return GetUserModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 只有管理员可以调用
     * @tags user
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param ListUserRequest $request
     * @param RuntimeOptions $runtime
     * @return ListUsersModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function listUsersEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/user/list");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return ListUsersModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 只有管理员可以调用
     * @tags user
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param RemoveUserFromSubdomainRequest $request
     * @param RuntimeOptions $runtime
     * @return RemoveUserFromSubdomainModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function removeUserFromSubdomainEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/user/remove_user_from_subdomain");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    return RemoveUserFromSubdomainModel::fromMap([
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 该接口将会根据条件查询用户，只有管理员可以调用
     * @tags user
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param SearchUserRequest $request
     * @param RuntimeOptions $runtime
     * @return SearchUserModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function searchUserEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/user/search");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return SearchUserModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 用户可以修改自己的description，nick_name，avatar；
     * 管理员在用户基础上还可修改status（可以修改任意用户）；
     * 超级管理员在管理员基础上还可修改role（可以修改任意用户）。
     * @tags user
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param UpdateUserRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateUserModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function updateUserEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/user/update");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return UpdateUserModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 该接口将会创建故事
     * @tags image
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param CreateStoryRequest $request
     * @param RuntimeOptions $runtime
     * @return CreateStoryModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function createStoryEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/image/create_story");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return CreateStoryModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 该接口将返回用户Drive下的云照片个数
     * @tags image
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param GetImageCountRequest $request
     * @param RuntimeOptions $runtime
     * @return GetPhotoCountModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function getPhotoCountEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/image/get_photo_count");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return GetPhotoCountModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 该接口将会获取故事详情
     * @tags image
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param GetStoryDetailRequest $request
     * @param RuntimeOptions $runtime
     * @return GetStoryDetailModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function getStoryDetailEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/image/get_story_detail");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return GetStoryDetailModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 该接口将会展示用户图片的地点分组
     * @tags image
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param ListImageAddressGroupsRequest $request
     * @param RuntimeOptions $runtime
     * @return ListAddressGroupsModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function listAddressGroupsEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/image/list_address_groups");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return ListAddressGroupsModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 该接口将会列举人脸分组
     * @tags image
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param ListImageFaceGroupsRequest $request
     * @param RuntimeOptions $runtime
     * @return ListFacegroupsModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function listFacegroupsEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/image/list_facegroups");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return ListFacegroupsModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 该接口将会获取故事列表
     * @tags image
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param ListStoryRequest $request
     * @param RuntimeOptions $runtime
     * @return ListStoryModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function listStoryEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/image/list_story");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return ListStoryModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 该接口将会展示场景标记
     * @tags image
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param ListImageTagsRequest $request
     * @param RuntimeOptions $runtime
     * @return ListTagsModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function listTagsEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/image/list_tags");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return ListTagsModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 该接口将会对用户输入内容语义解析出标签，地点，时间
     * @tags image
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param ParseKeywordsRequest $request
     * @param RuntimeOptions $runtime
     * @return ParseKeywordsModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function parseKeywordsEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/image/parse_keywords");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return ParseKeywordsModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 该接口将会移除故事中的照片
     * @tags image
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param RemoveStoryImagesRequest $request
     * @param RuntimeOptions $runtime
     * @return RemoveStoryImagesModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function removeStoryImagesEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/image/remove_story_images");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return RemoveStoryImagesModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 该接口将会展示用户图片的地点分组
     * @tags image
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param SearchImageAddressGroupsRequest $request
     * @param RuntimeOptions $runtime
     * @return SearchAddressGroupsModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function searchAddressGroupsEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/image/search_address_groups");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return SearchAddressGroupsModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 该接口将会更新人脸分组信息
     * @tags image
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param UpdateFaceGroupInfoRequest $request
     * @param RuntimeOptions $runtime
     * @return UpdateFacegroupInfoModel
     * @throws TeaError
     * @throws Exception
     * @throws TeaUnableRetryError
     */
    public function updateFacegroupInfoEx($request, $runtime){
        $request->validate();
        $runtime->validate();
        $_runtime = [
            "timeouted" => "retry",
            "readTimeout" => $runtime->readTimeout,
            "connectTimeout" => $runtime->connectTimeout,
            "localAddr" => $runtime->localAddr,
            "httpProxy" => $runtime->httpProxy,
            "httpsProxy" => $runtime->httpsProxy,
            "noProxy" => $runtime->noProxy,
            "maxIdleConns" => $runtime->maxIdleConns,
            "socks5Proxy" => $runtime->socks5Proxy,
            "socks5NetWork" => $runtime->socks5NetWork,
            "retry" => [
                "retryable" => $runtime->autoretry,
                "maxAttempts" => Utils::defaultNumber($runtime->maxAttempts, 3)
            ],
            "backoff" => [
                "policy" => Utils::defaultString($runtime->backoffPolicy, "no"),
                "period" => Utils::defaultNumber($runtime->backoffPeriod, 1)
            ],
            "ignoreSSL" => $runtime->ignoreSSL
        ];
        $_lastRequest = null;
        $_lastException = null;
        $_now = time();
        $_retryTimes = 0;
        while (Tea::allowRetry(@$_runtime["retry"], $_retryTimes, $_now)) {
            if ($_retryTimes > 0) {
                $_backoffTime = Tea::getBackoffTime(@$_runtime["backoff"], $_retryTimes);
                if ($_backoffTime > 0) {
                    Tea::sleep($_backoffTime);
                }
            }
            $_retryTimes = $_retryTimes + 1;
            try {
                $_request = new Request();
                $accesskeyId = $this->getAccessKeyId();
                $accessKeySecret = $this->getAccessKeySecret();
                $securityToken = $this->getSecurityToken();
                $accessToken = $this->getAccessToken();
                $realReq = Utils::toMap($request);
                $_request->protocol = Utils::defaultString($this->_protocol, "https");
                $_request->method = "POST";
                $_request->pathname = $this->getPathname($this->_nickname, "/v2/image/update_facegroup_info");
                $_request->headers = Tea::merge([
                    "user-agent" => $this->getUserAgent(),
                    "host" => Utils::defaultString($this->_endpoint, "" . $this->_domainId . ".api.aliyunpds.com"),
                    "content-type" => "application/json; charset=utf-8"
                ], $request->headers);
                @$realReq["headers"] = null;
                if (!Utils::empty_($accessToken)) {
                    $_request->headers["authorization"] = "Bearer " . $accessToken . "";
                }
                else if (!Utils::empty_($accesskeyId) && !Utils::empty_($accessKeySecret)) {
                    if (!Utils::empty_($securityToken)) {
                        $_request->headers["x-acs-security-token"] = $securityToken;
                    }
                    $_request->headers["date"] = Utils::getDateUTCString();
                    $_request->headers["accept"] = "application/json";
                    $_request->headers["x-acs-signature-method"] = "HMAC-SHA1";
                    $_request->headers["x-acs-signature-version"] = "1.0";
                    $stringToSign = RoaUtils::getStringToSign($_request);
                    $_request->headers["authorization"] = "acs " . $accesskeyId . ":" . RoaUtils::getSignature($stringToSign, $accessKeySecret) . "";
                }
                $_request->body = Utils::toJSONString($realReq);
                $_lastRequest = $_request;
                $_response= Tea::send($_request, $_runtime);
                $respMap = null;
                $obj = null;
                if (Utils::equalNumber($_response->statusCode, 200)) {
                    $obj = Utils::readAsJSON($_response->body);
                    $respMap = Utils::assertAsMap($obj);
                    return UpdateFacegroupInfoModel::fromMap([
                        "body" => $respMap,
                        "headers" => $_response->headers
                    ]);
                }
                if (!Utils::empty_(@$_response->headers["x-ca-error-message"])) {
                    throw new TeaError([
                        "data" => [
                            "requestId" => @$_response->headers["x-ca-request-id"],
                            "statusCode" => $_response->statusCode,
                            "statusMessage" => $_response->statusMessage
                        ],
                        "message" => @$_response->headers["x-ca-error-message"]
                    ]);
                }
                $obj = Utils::readAsJSON($_response->body);
                $respMap = Utils::assertAsMap($obj);
                throw new TeaError(Tea::merge([
                    "data" => [
                        "requestId" => @$_response->headers["x-ca-request-id"],
                        "statusCode" => $_response->statusCode,
                        "statusMessage" => $_response->statusMessage
                    ]
                ], $respMap));
            }
            catch (Exception $e) {
                if (!($e instanceof TeaError)) {
                    $e = new TeaError([], $e->getMessage(), $e->getCode(), $e);
                }
                if (Tea::isRetryable($e)) {
                    $_lastException = $e;
                    continue;
                }
                throw $e;
            }
        }
        throw new TeaUnableRetryError($_lastRequest, $_lastException);
    }

    /**
     * 取消绑定关系，生成新用户，返回访问令牌
     * @tags account
     * @error InvalidParameterMissing The input parameter {parameter_name} is missing.
     * @error Forbidden User not authorized to operate on the specified APIs.
     * @error InternalError The request has been failed due to some unknown error.
     * @param CancelLinkRequest $request
     * @return CancelLinkModel
     */
    public function cancelLink($request){
        $runtime = new RuntimeOptions([]);
        return $this->cancelLinkEx($request, $runtime);
    }

    /**
     * 确认绑定关系, 成功后返回访问令牌
     * @tags account
     * @error InvalidParameterMissing The input parameter {parameter_name} is missing.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @param ConfirmLinkRequest $request
     * @return ConfirmLinkModel
     */
    public function confirmLink($request){
        $runtime = new RuntimeOptions([]);
        return $this->confirmLinkEx($request, $runtime);
    }

    /**
     * 修改手机登录密码，密码必须包含数字和字母，长度8-20个字符
     * @tags account
     * @error InvalidParameterMissing The input parameter {parameter_name} is missing.
     * @error Forbidden User not authorized to operate on the specified APIs.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @param DefaultChangePasswordRequest $request
     * @return ChangePasswordModel
     */
    public function changePassword($request){
        $runtime = new RuntimeOptions([]);
        return $this->changePasswordEx($request, $runtime);
    }

    /**
     * 设置手机登录密码，密码必须包含数字和字母，长度8-20个字符
     * @tags account
     * @error InvalidParameterMissing The input parameter {parameter_name} is missing.
     * @error Forbidden User not authorized to operate on the specified APIs.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @param DefaultSetPasswordRequest $request
     * @return SetPasswordModel
     */
    public function setPassword($request){
        $runtime = new RuntimeOptions([]);
        return $this->setPasswordEx($request, $runtime);
    }

    /**
     * 校验手机短信验证码，用于重置密码时校验手机，通过校验后返回state，可通过state重新设置密码
     * @tags account
     * @error InvalidParameterMissing The input parameter {parameter_name} is missing.
     * @error Forbidden User not authorized to operate on the specified APIs.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @param VerifyCodeRequest $request
     * @return VerifyCodeModel
     */
    public function verifyCode($request){
        $runtime = new RuntimeOptions([]);
        return $this->verifyCodeEx($request, $runtime);
    }

    /**
     * 管理员通过账号信息直接获取用户的访问令牌
     * @tags account
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error Forbidden User not authorized to operate on the specified APIs.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @param GetAccessTokenByLinkInfoRequest $request
     * @return GetAccessTokenByLinkInfoModel
     */
    public function getAccessTokenByLinkInfo($request){
        $runtime = new RuntimeOptions([]);
        return $this->getAccessTokenByLinkInfoEx($request, $runtime);
    }

    /**
     * 获取图片验证码，用于人机校验，默认不需要
     * @tags account
     * @error InvalidParameterMissing The input parameter {parameter_name} is missing.
     * @error Forbidden User not authorized to operate on the specified APIs.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @param GetCaptchaRequest $request
     * @return GetCaptchaModel
     */
    public function getCaptcha($request){
        $runtime = new RuntimeOptions([]);
        return $this->getCaptchaEx($request, $runtime);
    }

    /**
     * 获取用户认证方式详情
     * @tags account
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error Forbidden User not authorized to operate on the specified APIs.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @param GetByLinkInfoRequest $request
     * @return GetLinkInfoModel
     */
    public function getLinkInfo($request){
        $runtime = new RuntimeOptions([]);
        return $this->getLinkInfoEx($request, $runtime);
    }

    /**
     * 获取用户的所有绑定信息
     * @tags account
     * @error InvalidParameterMissing The input parameter {parameter_name} is missing.
     * @error Forbidden User not authorized to operate on the specified APIs.
     * @error InternalError The request has been failed due to some unknown error.
     * @param GetLinkInfoByUserIDRequest $request
     * @return GetLinkInfoByUserIdModel
     */
    public function getLinkInfoByUserId($request){
        $runtime = new RuntimeOptions([]);
        return $this->getLinkInfoByUserIdEx($request, $runtime);
    }

    /**
     * 获取公钥，用于加密对称密钥
     * @tags account
     * @error InvalidParameterMissing The input parameter {parameter_name} is missing.
     * @error Forbidden User not authorized to operate on the specified APIs.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @param GetPublicKeyRequest $request
     * @return GetPublicKeyModel
     */
    public function getPublicKey($request){
        $runtime = new RuntimeOptions([]);
        return $this->getPublicKeyEx($request, $runtime);
    }

    /**
     * 绑定用户认证方式
     * @tags account
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error Forbidden User not authorized to operate on the specified APIs.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error AlreadyExist {resource} has already exists. {extra_msg}
     * @error InternalError The request has been failed due to some unknown error.
     * @param AccountLinkRequest $request
     * @return LinkModel
     */
    public function link($request){
        $runtime = new RuntimeOptions([]);
        return $this->linkEx($request, $runtime);
    }

    /**
     * 查询手机号是否已被注册
     * @tags account
     * @error InvalidParameterMissing The input parameter {parameter_name} is missing.
     * @error Forbidden User not authorized to operate on the specified APIs.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @param MobileCheckExistRequest $request
     * @return CheckExistModel
     */
    public function checkExist($request){
        $runtime = new RuntimeOptions([]);
        return $this->checkExistEx($request, $runtime);
    }

    /**
     * 通过手机号+短信或密码登录，返回刷新令牌和访问令牌
     * @tags account
     * @error InvalidParameterMissing The input parameter {parameter_name} is missing.
     * @error Forbidden User not authorized to operate on the specified APIs.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @param MobileLoginRequest $request
     * @return LoginModel
     */
    public function login($request){
        $runtime = new RuntimeOptions([]);
        return $this->loginEx($request, $runtime);
    }

    /**
     * 通过手机号+短信验证码注册账号
     * @tags account
     * @error InvalidParameterMissing The input parameter {parameter_name} is missing.
     * @error Forbidden User not authorized to operate on the specified APIs.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error AlreadyExist {resource} has already exists. {extra_msg}
     * @error InternalError The request has been failed due to some unknown error.
     * @param MobileRegisterRequest $request
     * @return RegisterModel
     */
    public function register($request){
        $runtime = new RuntimeOptions([]);
        return $this->registerEx($request, $runtime);
    }

    /**
     * 发送短信验证码，用于登录、注册、修改密码、绑定等
     * @tags account
     * @error InvalidParameterMissing The input parameter {parameter_name} is missing.
     * @error Forbidden User not authorized to operate on the specified APIs.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @param MobileSendSmsCodeRequest $request
     * @return MobileSendSmsCodeModel
     */
    public function mobileSendSmsCode($request){
        $runtime = new RuntimeOptions([]);
        return $this->mobileSendSmsCodeEx($request, $runtime);
    }

    /**
     * 用户退出登录
     * @tags account
     * @error InvalidParameterMissing The input parameter {parameter_name} is missing.
     * @error Forbidden User not authorized to operate on the specified APIs.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @param RevokeRequest $request
     * @return AccountRevokeModel
     */
    public function accountRevoke($request){
        $runtime = new RuntimeOptions([]);
        return $this->accountRevokeEx($request, $runtime);
    }

    /**
     * 用户通过刷新令牌（refresh_token）获取访问令牌（access_token）
     * @tags account
     * @error InvalidParameterMissing The input parameter {parameter_name} is missing.
     * @error Forbidden User not authorized to operate on the specified APIs.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @param AccountTokenRequest $request
     * @return AccountTokenModel
     */
    public function accountToken($request){
        $runtime = new RuntimeOptions([]);
        return $this->accountTokenEx($request, $runtime);
    }

    /**
     * 列举Store列表
     * @tags admin
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error Forbidden User not authorized to operate on the specified APIs.
     * @error InternalError The request has been failed due to some unknown error.
     * @param AdminListStoresRequest $request
     * @return AdminListStoresModel
     */
    public function adminListStores($request){
        $runtime = new RuntimeOptions([]);
        return $this->adminListStoresEx($request, $runtime);
    }

    /**
     * create subdomain
     * @tags subdomain
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error Forbidden User not authorized to operate on the specified APIs.
     * @error InternalError The request has been failed due to some unknown error.
     * @param CreateSubdomainRequest $request
     * @return CreateSubdomainModel
     */
    public function createSubdomain($request){
        $runtime = new RuntimeOptions([]);
        return $this->createSubdomainEx($request, $runtime);
    }

    /**
     * delete subdomain
     * @tags subdomain
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error Forbidden User not authorized to operate on the specified APIs.
     * @error InternalError The request has been failed due to some unknown error.
     * @param DeleteSubdomainRequest $request
     * @return DeleteSubdomainModel
     */
    public function deleteSubdomain($request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteSubdomainEx($request, $runtime);
    }

    /**
     * get subdomain
     * @tags subdomain
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error Forbidden User not authorized to operate on the specified APIs.
     * @error InternalError The request has been failed due to some unknown error.
     * @param GetSubdomainRequest $request
     * @return GetSubdomainModel
     */
    public function getSubdomain($request){
        $runtime = new RuntimeOptions([]);
        return $this->getSubdomainEx($request, $runtime);
    }

    /**
     * list subdomain
     * @tags subdomain
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error Forbidden User not authorized to operate on the specified APIs.
     * @error InternalError The request has been failed due to some unknown error.
     * @param ListSubdomainsRequest $request
     * @return ListSubdomainsModel
     */
    public function listSubdomains($request){
        $runtime = new RuntimeOptions([]);
        return $this->listSubdomainsEx($request, $runtime);
    }

    /**
     * update subdomain
     * @tags subdomain
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error Forbidden User not authorized to operate on the specified APIs.
     * @error InternalError The request has been failed due to some unknown error.
     * @param UpdateSubdomainRequest $request
     * @return UpdateSubdomainModel
     */
    public function updateSubdomain($request){
        $runtime = new RuntimeOptions([]);
        return $this->updateSubdomainEx($request, $runtime);
    }

    /**
     * 获取用户的accessToken
     * @tags admin
     * @error undefined undefined
     * @error undefined undefined
     * @error undefined undefined
     * @error undefined undefined
     * @error undefined undefined
     * @param GetUserAccessTokenRequest $request
     * @return GetUserAccessTokenModel
     */
    public function getUserAccessToken($request){
        $runtime = new RuntimeOptions([]);
        return $this->getUserAccessTokenEx($request, $runtime);
    }

    /**
     * 如果目录拷贝、目录删除不能在限定时间内完成，将访问一个异步任务id，
     * 通过此接口获取异步任务的信息，以确定任务是否执行成功。
     * @tags async_task
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param GetAsyncTaskRequest $request
     * @return GetAsyncTaskInfoModel
     */
    public function getAsyncTaskInfo($request){
        $runtime = new RuntimeOptions([]);
        return $this->getAsyncTaskInfoEx($request, $runtime);
    }

    /**
     * 对多个原子操作封装成一个批处理请求，服务端并行处理并打包返回每个操作的执行结果。
     * 支持对文件和文件夹的移动、删除、修改，每个批处理请求最多包含100个原则操作。
     * @tags batch
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param BatchRequest $request
     * @return BatchOperationModel
     */
    public function batchOperation($request){
        $runtime = new RuntimeOptions([]);
        return $this->batchOperationEx($request, $runtime);
    }

    /**
     * 支持normal和large两种drive，
     * large类型的drive用于文件数多的场景，不支持list操作，
     * 当drive的文件数量大于1亿时，建议使用large类型。
     * @tags drive
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param CreateDriveRequest $request
     * @return CreateDriveModel
     */
    public function createDrive($request){
        $runtime = new RuntimeOptions([]);
        return $this->createDriveEx($request, $runtime);
    }

    /**
     * 删除指定drive_id对应的Drive
     * @tags drive
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param DeleteDriveRequest $request
     * @return DeleteDriveModel
     */
    public function deleteDrive($request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteDriveEx($request, $runtime);
    }

    /**
     * 获取指定drive_id对应的Drive详细信息。
     * @tags drive
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param GetDriveRequest $request
     * @return GetDriveModel
     */
    public function getDrive($request){
        $runtime = new RuntimeOptions([]);
        return $this->getDriveEx($request, $runtime);
    }

    /**
     * 一个用户可拥有多个drive，在创建drive时通过参数指定是否为这个用户的默认drive，
     * 每个用户只能设置一个默认drive。
     * @tags drive
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param GetDefaultDriveRequest $request
     * @return GetDefaultDriveModel
     */
    public function getDefaultDrive($request){
        $runtime = new RuntimeOptions([]);
        return $this->getDefaultDriveEx($request, $runtime);
    }

    /**
     * 管理员列举指定用户的Drive
     * @tags drive
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param ListDriveRequest $request
     * @return ListDrivesModel
     */
    public function listDrives($request){
        $runtime = new RuntimeOptions([]);
        return $this->listDrivesEx($request, $runtime);
    }

    /**
     * 列举当前用户（访问令牌）的Drive
     * @tags drive
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param ListMyDriveRequest $request
     * @return ListMyDrivesModel
     */
    public function listMyDrives($request){
        $runtime = new RuntimeOptions([]);
        return $this->listMyDrivesEx($request, $runtime);
    }

    /**
     * 更新指定drive_id的Drive信息
     * @tags drive
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param UpdateDriveRequest $request
     * @return UpdateDriveModel
     */
    public function updateDrive($request){
        $runtime = new RuntimeOptions([]);
        return $this->updateDriveEx($request, $runtime);
    }

    /**
     * 完成文件上传。
     * @tags file
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param CompleteFileRequest $request
     * @return CompleteFileModel
     */
    public function completeFile($request){
        $runtime = new RuntimeOptions([]);
        return $this->completeFileEx($request, $runtime);
    }

    /**
     * 指定源文件或文件夹，拷贝到指定的文件夹。
     * @tags file
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param CopyFileRequest $request
     * @return CopyFileModel
     */
    public function copyFile($request){
        $runtime = new RuntimeOptions([]);
        return $this->copyFileEx($request, $runtime);
    }

    /**
     * 在指定文件夹下创建文件或者文件夹，
     * 根文件夹用root表示，其他文件夹使用创建文件夹时返回的file_id。
     * @tags file
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error AlreadyExist {resource} has already exists. {extra_msg}
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param CreateFileRequest $request
     * @return CreateFileModel
     */
    public function createFile($request){
        $runtime = new RuntimeOptions([]);
        return $this->createFileEx($request, $runtime);
    }

    /**
     * 指定文件或文件夹ID，删除文件或者文件夹。
     * @tags file
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param DeleteFileRequest $request
     * @return DeleteFileModel
     */
    public function deleteFile($request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteFileEx($request, $runtime);
    }

    /**
     * 获取指定文件或文件夹ID的信息。
     * @tags file
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param GetFileRequest $request
     * @return GetFileModel
     */
    public function getFile($request){
        $runtime = new RuntimeOptions([]);
        return $this->getFileEx($request, $runtime);
    }

    /**
     * 根据路径获取指定文件或文件夹的信息。
     * @tags file
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param GetFileByPathRequest $request
     * @return GetFileByPathModel
     */
    public function getFileByPath($request){
        $runtime = new RuntimeOptions([]);
        return $this->getFileByPathEx($request, $runtime);
    }

    /**
     * 获取文件的下载地址，调用者可自己设置range头并发下载。
     * @tags file
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param GetDownloadUrlRequest $request
     * @return GetDownloadUrlModel
     */
    public function getDownloadUrl($request){
        $runtime = new RuntimeOptions([]);
        return $this->getDownloadUrlEx($request, $runtime);
    }

    /**
     * 获取drive内，增量数据最新的游标
     * @tags file_delta
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param GetLastCursorRequest $request
     * @return GetLastCursorModel
     */
    public function getLastCursor($request){
        $runtime = new RuntimeOptions([]);
        return $this->getLastCursorEx($request, $runtime);
    }

    /**
     * 获取media文件播放URL地址（当前仅支持m3u8）
     * @tags file
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param GetMediaPlayURLRequest $request
     * @return GetMediaPlayUrlModel
     */
    public function getMediaPlayUrl($request){
        $runtime = new RuntimeOptions([]);
        return $this->getMediaPlayUrlEx($request, $runtime);
    }

    /**
     * 获取文档的在线编辑地址
     * @tags file
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param GetOfficeEditUrlRequest $request
     * @return GetOfficeEditUrlModel
     */
    public function getOfficeEditUrl($request){
        $runtime = new RuntimeOptions([]);
        return $this->getOfficeEditUrlEx($request, $runtime);
    }

    /**
     * 获取文档的预览地址（office文档）
     * @tags file
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param GetOfficePreviewUrlRequest $request
     * @return GetOfficePreviewUrlModel
     */
    public function getOfficePreviewUrl($request){
        $runtime = new RuntimeOptions([]);
        return $this->getOfficePreviewUrlEx($request, $runtime);
    }

    /**
     * 可指定分片信息，一次获取多个分片的上传地址。
     * @tags file
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param GetUploadUrlRequest $request
     * @return GetUploadUrlModel
     */
    public function getUploadUrl($request){
        $runtime = new RuntimeOptions([]);
        return $this->getUploadUrlEx($request, $runtime);
    }

    /**
     * 获取视频雪碧图地址
     * @tags file
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param GetVideoPreviewSpriteURLRequest $request
     * @return GetVideoPreviewSpriteUrlModel
     */
    public function getVideoPreviewSpriteUrl($request){
        $runtime = new RuntimeOptions([]);
        return $this->getVideoPreviewSpriteUrlEx($request, $runtime);
    }

    /**
     * 获取视频播放地址
     * @tags file
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param GetVideoPreviewURLRequest $request
     * @return GetVideoPreviewUrlModel
     */
    public function getVideoPreviewUrl($request){
        $runtime = new RuntimeOptions([]);
        return $this->getVideoPreviewUrlEx($request, $runtime);
    }

    /**
     * 列举指定目录下的文件或文件夹。
     * @tags file
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param ListFileRequest $request
     * @return ListFileModel
     */
    public function listFile($request){
        $runtime = new RuntimeOptions([]);
        return $this->listFileEx($request, $runtime);
    }

    /**
     * list file activity
     * @tags file
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param ListFileActivityRequest $request
     * @return ListFileActivityModel
     */
    public function listFileActivity($request){
        $runtime = new RuntimeOptions([]);
        return $this->listFileActivityEx($request, $runtime);
    }

    /**
     * 查看分享中的文件列表
     * @tags share_link
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error ShareLinkTokenInvalid ShareToken is invalid. {message}
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param ListByAnonymousRequest $request
     * @return ListFileByAnonymousModel
     */
    public function listFileByAnonymous($request){
        $runtime = new RuntimeOptions([]);
        return $this->listFileByAnonymousEx($request, $runtime);
    }

    /**
     * 根据自定义同步索引键列举文件或文件夹。
     * @tags file
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param ListFileByCustomIndexKeyRequest $request
     * @return ListFileByCustomIndexKeyModel
     */
    public function listFileByCustomIndexKey($request){
        $runtime = new RuntimeOptions([]);
        return $this->listFileByCustomIndexKeyEx($request, $runtime);
    }

    /**
     * 获取drive内，增量数据列表
     * @tags file_delta
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param ListFileDeltaRequest $request
     * @return ListFileDeltaModel
     */
    public function listFileDelta($request){
        $runtime = new RuntimeOptions([]);
        return $this->listFileDeltaEx($request, $runtime);
    }

    /**
     * 列举upload_id对应的已上传分片。
     * @tags file
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param ListUploadedPartRequest $request
     * @return ListUploadedPartsModel
     */
    public function listUploadedParts($request){
        $runtime = new RuntimeOptions([]);
        return $this->listUploadedPartsEx($request, $runtime);
    }

    /**
     * 指定源文件或文件夹，移动到指定的文件夹。
     * @tags file
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param MoveFileRequest $request
     * @return MoveFileModel
     */
    public function moveFile($request){
        $runtime = new RuntimeOptions([]);
        return $this->moveFileEx($request, $runtime);
    }

    /**
     * 刷新在线编辑Token
     * @tags file, refresh, office, edit
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param RefreshOfficeEditTokenRequest $request
     * @return TokenModel
     */
    public function token($request){
        $runtime = new RuntimeOptions([]);
        return $this->tokenEx($request, $runtime);
    }

    /**
     * 在指定drive下全量获取文件元信息。
     * @tags file
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param ScanFileMetaRequest $request
     * @return ScanFileMetaModel
     */
    public function scanFileMeta($request){
        $runtime = new RuntimeOptions([]);
        return $this->scanFileMetaEx($request, $runtime);
    }

    /**
     * 根据筛选条件，在指定drive下搜索文件。
     * @tags file
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param SearchFileRequest $request
     * @return SearchFileModel
     */
    public function searchFile($request){
        $runtime = new RuntimeOptions([]);
        return $this->searchFileEx($request, $runtime);
    }

    /**
     * 对指定的文件或文件夹更新信息。
     * @tags file
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error AlreadyExist {resource} has already exists. {extra_msg}
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param UpdateFileMetaRequest $request
     * @return UpdateFileModel
     */
    public function updateFile($request){
        $runtime = new RuntimeOptions([]);
        return $this->updateFileEx($request, $runtime);
    }

    /**
     * 创建共享。
     * @tags share
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param CreateShareRequest $request
     * @return CreateShareModel
     */
    public function createShare($request){
        $runtime = new RuntimeOptions([]);
        return $this->createShareEx($request, $runtime);
    }

    /**
     * 删除指定共享
     * @tags share
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param DeleteShareRequest $request
     * @return DeleteShareModel
     */
    public function deleteShare($request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteShareEx($request, $runtime);
    }

    /**
     * 获取共享信息。
     * @tags share
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param GetShareRequest $request
     * @return GetShareModel
     */
    public function getShare($request){
        $runtime = new RuntimeOptions([]);
        return $this->getShareEx($request, $runtime);
    }

    /**
     * 列举指定用户的共享
     * @tags share
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param ListShareRequest $request
     * @return ListShareModel
     */
    public function listShare($request){
        $runtime = new RuntimeOptions([]);
        return $this->listShareEx($request, $runtime);
    }

    /**
     * 修改指定共享
     * @tags share
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param UpdateShareRequest $request
     * @return UpdateShareModel
     */
    public function updateShare($request){
        $runtime = new RuntimeOptions([]);
        return $this->updateShareEx($request, $runtime);
    }

    /**
     * 取消指定分享
     * @tags share_link
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param CancelShareLinkRequest $request
     * @return CancelShareLinkModel
     */
    public function cancelShareLink($request){
        $runtime = new RuntimeOptions([]);
        return $this->cancelShareLinkEx($request, $runtime);
    }

    /**
     * 创建分享。
     * @tags share_link
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param CreateShareLinkRequest $request
     * @return CreateShareLinkModel
     */
    public function createShareLink($request){
        $runtime = new RuntimeOptions([]);
        return $this->createShareLinkEx($request, $runtime);
    }

    /**
     * 查看分享的所有信息
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param GetShareLinkRequest $request
     * @return GetShareLinkModel
     */
    public function getShareLink($request){
        $runtime = new RuntimeOptions([]);
        return $this->getShareLinkEx($request, $runtime);
    }

    /**
     * 查看分享的基本信息，比如分享者、到期时间等
     * @tags share_link
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param GetShareLinkByAnonymousRequest $request
     * @return GetShareByAnonymousModel
     */
    public function getShareByAnonymous($request){
        $runtime = new RuntimeOptions([]);
        return $this->getShareByAnonymousEx($request, $runtime);
    }

    /**
     * 使用分享口令换取分享id
     * @tags share_link
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param GetShareLinkIDRequest $request
     * @return GetShareIdModel
     */
    public function getShareId($request){
        $runtime = new RuntimeOptions([]);
        return $this->getShareIdEx($request, $runtime);
    }

    /**
     * 使用分享码+提取码换取分享token
     * @tags share_link
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param GetShareLinkTokenRequest $request
     * @return GetShareTokenModel
     */
    public function getShareToken($request){
        $runtime = new RuntimeOptions([]);
        return $this->getShareTokenEx($request, $runtime);
    }

    /**
     * 列举指定用户的分享
     * @tags share_link
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param ListShareLinkRequest $request
     * @return ListShareLinkModel
     */
    public function listShareLink($request){
        $runtime = new RuntimeOptions([]);
        return $this->listShareLinkEx($request, $runtime);
    }

    /**
     * 更新分享。
     * @tags share_link
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param UpdateShareLinkRequest $request
     * @return UpdateShareLinkModel
     */
    public function updateShareLink($request){
        $runtime = new RuntimeOptions([]);
        return $this->updateShareLinkEx($request, $runtime);
    }

    /**
     * 创建用户组
     * @tags group
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param CreateGroupRequest $request
     * @return CreateGroupModel
     */
    public function createGroup($request){
        $runtime = new RuntimeOptions([]);
        return $this->createGroupEx($request, $runtime);
    }

    /**
     * 删除用户组
     * @tags group
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param DeleteGroupRequest $request
     * @return DeleteGroupModel
     */
    public function deleteGroup($request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteGroupEx($request, $runtime);
    }

    /**
     * 获取用户组
     * @tags group
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param GetGroupRequest $request
     * @return GetGroupModel
     */
    public function getGroup($request){
        $runtime = new RuntimeOptions([]);
        return $this->getGroupEx($request, $runtime);
    }

    /**
     * 列举用户组
     * @tags group
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param ListGroupRequest $request
     * @return ListGroupModel
     */
    public function listGroup($request){
        $runtime = new RuntimeOptions([]);
        return $this->listGroupEx($request, $runtime);
    }

    /**
     * 搜索用户组
     * @tags group
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param SearchGroupRequest $request
     * @return SearchGroupModel
     */
    public function searchGroup($request){
        $runtime = new RuntimeOptions([]);
        return $this->searchGroupEx($request, $runtime);
    }

    /**
     * 更新用户组
     * @tags group
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param UpdateGroupRequest $request
     * @return UpdateGroupModel
     */
    public function updateGroup($request){
        $runtime = new RuntimeOptions([]);
        return $this->updateGroupEx($request, $runtime);
    }

    /**
     * 创建membership
     * @tags membership
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param CreateMembershipRequest $request
     * @return CreateMembershipModel
     */
    public function createMembership($request){
        $runtime = new RuntimeOptions([]);
        return $this->createMembershipEx($request, $runtime);
    }

    /**
     * 删除membership
     * @tags membership
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param DeleteMembershipRequest $request
     * @return DeleteMembershipModel
     */
    public function deleteMembership($request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteMembershipEx($request, $runtime);
    }

    /**
     * 获取membership
     * @tags membership
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param GetMembershipRequest $request
     * @return GetMembershipModel
     */
    public function getMembership($request){
        $runtime = new RuntimeOptions([]);
        return $this->getMembershipEx($request, $runtime);
    }

    /**
     * 检查group是否包含某个member
     * @tags membership
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param HasMemberRequest $request
     * @return HasMemberModel
     */
    public function hasMember($request){
        $runtime = new RuntimeOptions([]);
        return $this->hasMemberEx($request, $runtime);
    }

    /**
     * 列举直属的子membership
     * @tags membership
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param ListDirectChildMembershipsRequest $request
     * @return ListDirectChildMembershipsModel
     */
    public function listDirectChildMemberships($request){
        $runtime = new RuntimeOptions([]);
        return $this->listDirectChildMembershipsEx($request, $runtime);
    }

    /**
     * 列举直属的membership
     * @tags membership
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param ListDirectParentMembershipsRequest $request
     * @return ListDirectMembershipsModel
     */
    public function listDirectMemberships($request){
        $runtime = new RuntimeOptions([]);
        return $this->listDirectMembershipsEx($request, $runtime);
    }

    /**
     * 列举直属的父membership
     * @tags membership
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param ListDirectParentMembershipsRequest $request
     * @return ListDirectParentMembershipsModel
     */
    public function listDirectParentMemberships($request){
        $runtime = new RuntimeOptions([]);
        return $this->listDirectParentMembershipsEx($request, $runtime);
    }

    /**
     * 更新membership
     * @tags membership
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param UpdateMembershipRequest $request
     * @return UpdateMembershipModel
     */
    public function updateMembership($request){
        $runtime = new RuntimeOptions([]);
        return $this->updateMembershipEx($request, $runtime);
    }

    /**
     * 只有管理员可以调用
     * @tags user
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param AddUserToSubdomainRequest $request
     * @return AddUserToSubdomainModel
     */
    public function addUserToSubdomain($request){
        $runtime = new RuntimeOptions([]);
        return $this->addUserToSubdomainEx($request, $runtime);
    }

    /**
     * 创建用户，只有管理员可以调用
     * @tags user
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param CreateUserRequest $request
     * @return CreateUserModel
     */
    public function createUser($request){
        $runtime = new RuntimeOptions([]);
        return $this->createUserEx($request, $runtime);
    }

    /**
     * 只有管理员可以调用
     * @tags user
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param DeleteUserRequest $request
     * @return DeleteUserModel
     */
    public function deleteUser($request){
        $runtime = new RuntimeOptions([]);
        return $this->deleteUserEx($request, $runtime);
    }

    /**
     * 获取用户详细信息，普通用户只能获取自己的信息，管理员可以获取任意用户的信息。
     * @tags user
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param GetUserRequest $request
     * @return GetUserModel
     */
    public function getUser($request){
        $runtime = new RuntimeOptions([]);
        return $this->getUserEx($request, $runtime);
    }

    /**
     * 只有管理员可以调用
     * @tags user
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param ListUserRequest $request
     * @return ListUsersModel
     */
    public function listUsers($request){
        $runtime = new RuntimeOptions([]);
        return $this->listUsersEx($request, $runtime);
    }

    /**
     * 只有管理员可以调用
     * @tags user
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param RemoveUserFromSubdomainRequest $request
     * @return RemoveUserFromSubdomainModel
     */
    public function removeUserFromSubdomain($request){
        $runtime = new RuntimeOptions([]);
        return $this->removeUserFromSubdomainEx($request, $runtime);
    }

    /**
     * 该接口将会根据条件查询用户，只有管理员可以调用
     * @tags user
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param SearchUserRequest $request
     * @return SearchUserModel
     */
    public function searchUser($request){
        $runtime = new RuntimeOptions([]);
        return $this->searchUserEx($request, $runtime);
    }

    /**
     * 用户可以修改自己的description，nick_name，avatar；
     * 管理员在用户基础上还可修改status（可以修改任意用户）；
     * 超级管理员在管理员基础上还可修改role（可以修改任意用户）。
     * @tags user
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param UpdateUserRequest $request
     * @return UpdateUserModel
     */
    public function updateUser($request){
        $runtime = new RuntimeOptions([]);
        return $this->updateUserEx($request, $runtime);
    }

    /**
     * 该接口将会创建故事
     * @tags image
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param CreateStoryRequest $request
     * @return CreateStoryModel
     */
    public function createStory($request){
        $runtime = new RuntimeOptions([]);
        return $this->createStoryEx($request, $runtime);
    }

    /**
     * 该接口将返回用户Drive下的云照片个数
     * @tags image
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param GetImageCountRequest $request
     * @return GetPhotoCountModel
     */
    public function getPhotoCount($request){
        $runtime = new RuntimeOptions([]);
        return $this->getPhotoCountEx($request, $runtime);
    }

    /**
     * 该接口将会获取故事详情
     * @tags image
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param GetStoryDetailRequest $request
     * @return GetStoryDetailModel
     */
    public function getStoryDetail($request){
        $runtime = new RuntimeOptions([]);
        return $this->getStoryDetailEx($request, $runtime);
    }

    /**
     * 该接口将会展示用户图片的地点分组
     * @tags image
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param ListImageAddressGroupsRequest $request
     * @return ListAddressGroupsModel
     */
    public function listAddressGroups($request){
        $runtime = new RuntimeOptions([]);
        return $this->listAddressGroupsEx($request, $runtime);
    }

    /**
     * 该接口将会列举人脸分组
     * @tags image
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param ListImageFaceGroupsRequest $request
     * @return ListFacegroupsModel
     */
    public function listFacegroups($request){
        $runtime = new RuntimeOptions([]);
        return $this->listFacegroupsEx($request, $runtime);
    }

    /**
     * 该接口将会获取故事列表
     * @tags image
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param ListStoryRequest $request
     * @return ListStoryModel
     */
    public function listStory($request){
        $runtime = new RuntimeOptions([]);
        return $this->listStoryEx($request, $runtime);
    }

    /**
     * 该接口将会展示场景标记
     * @tags image
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param ListImageTagsRequest $request
     * @return ListTagsModel
     */
    public function listTags($request){
        $runtime = new RuntimeOptions([]);
        return $this->listTagsEx($request, $runtime);
    }

    /**
     * 该接口将会对用户输入内容语义解析出标签，地点，时间
     * @tags image
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param ParseKeywordsRequest $request
     * @return ParseKeywordsModel
     */
    public function parseKeywords($request){
        $runtime = new RuntimeOptions([]);
        return $this->parseKeywordsEx($request, $runtime);
    }

    /**
     * 该接口将会移除故事中的照片
     * @tags image
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param RemoveStoryImagesRequest $request
     * @return RemoveStoryImagesModel
     */
    public function removeStoryImages($request){
        $runtime = new RuntimeOptions([]);
        return $this->removeStoryImagesEx($request, $runtime);
    }

    /**
     * 该接口将会展示用户图片的地点分组
     * @tags image
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param SearchImageAddressGroupsRequest $request
     * @return SearchAddressGroupsModel
     */
    public function searchAddressGroups($request){
        $runtime = new RuntimeOptions([]);
        return $this->searchAddressGroupsEx($request, $runtime);
    }

    /**
     * 该接口将会更新人脸分组信息
     * @tags image
     * @error InvalidParameter The input parameter {parameter_name} is not valid.
     * @error AccessTokenInvalid AccessToken is invalid. {message}
     * @error ForbiddenNoPermission No Permission to access resource {resource_name}.
     * @error NotFound The resource {resource_name} cannot be found. Please check.
     * @error InternalError The request has been failed due to some unknown error.
     * @error ServiceUnavailable The request has failed due to a temporary failure of the server.
     * @param UpdateFaceGroupInfoRequest $request
     * @return UpdateFacegroupInfoModel
     */
    public function updateFacegroupInfo($request){
        $runtime = new RuntimeOptions([]);
        return $this->updateFacegroupInfoEx($request, $runtime);
    }

    /**
     * @param string $nickname
     * @param string $path
     * @return string
     */
    public function getPathname($nickname, $path){
        if (Utils::empty_($nickname)) {
            return $path;
        }
        return "/" . $nickname . "" . $path . "";
    }

    /**
     * @param string $expireTime
     * @return void
     */
    public function setExpireTime($expireTime){
        if (Utils::isUnset($this->_accessTokenCredential)) {
            return null;
        }
        $this->_accessTokenCredential->setExpireTime($expireTime);
    }

    /**
     * @return string
     */
    public function getExpireTime(){
        if (Utils::isUnset($this->_accessTokenCredential)) {
            return '';
        }
        $expireTime = $this->_accessTokenCredential->getExpireTime();
        return $expireTime;
    }

    /**
     * @param string $token
     * @return void
     */
    public function setRefreshToken($token){
        if (Utils::isUnset($this->_accessTokenCredential)) {
            return null;
        }
        $this->_accessTokenCredential->setRefreshToken($token);
    }

    /**
     * @return string
     */
    public function getRefreshToken(){
        if (Utils::isUnset($this->_accessTokenCredential)) {
            return '';
        }
        $token = $this->_accessTokenCredential->getRefreshToken();
        return $token;
    }

    /**
     * @param string $token
     * @return void
     */
    public function setAccessToken($token){
        if (Utils::isUnset($this->_accessTokenCredential)) {
            return null;
        }
        $this->_accessTokenCredential->setAccessToken($token);
    }

    /**
     * @return string
     */
    public function getAccessToken(){
        if (Utils::isUnset($this->_accessTokenCredential)) {
            return '';
        }
        $token = $this->_accessTokenCredential->getAccessToken();
        return $token;
    }

    /**
     * @param string $userAgent
     * @return void
     */
    public function setUserAgent($userAgent){
        $this->_userAgent = $userAgent;
    }

    /**
     * @param string $userAgent
     * @return void
     */
    public function appendUserAgent($userAgent){
        $this->_userAgent = "" . $this->_userAgent . " " . $userAgent . "";
    }

    /**
     * @return string
     */
    public function getUserAgent(){
        $userAgent = Utils::getUserAgent($this->_userAgent);
        return $userAgent;
    }

    /**
     * @return string
     */
    public function getAccessKeyId(){
        if (Utils::isUnset($this->_credential)) {
            return '';
        }
        $accessKeyId = $this->_credential->getAccessKeyId();
        return $accessKeyId;
    }

    /**
     * @return string
     */
    public function getAccessKeySecret(){
        if (Utils::isUnset($this->_credential)) {
            return '';
        }
        $secret = $this->_credential->getAccessKeySecret();
        return $secret;
    }

    /**
     * @return string
     */
    public function getSecurityToken(){
        if (Utils::isUnset($this->_credential)) {
            return '';
        }
        $token = $this->_credential->getSecurityToken();
        return $token;
    }
}
