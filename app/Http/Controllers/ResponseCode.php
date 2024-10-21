<?php

namespace App\Http;

enum ResponseCode: int
{
    case SUCCESS = 200;
    case CREATED = 201;
    case DELETED = 204;
    case BAD_REQUEST = 400;
    case UNAUTHORIZED = 401;
    case FORBIDDEN = 403;
    case NOT_FOUND = 404;
    case INTERNAL_SERVER_ERROR = 500;

    public function message(): string
    {
        return match ($this) {
            self::SUCCESS => 'Operation successful.',
            self::CREATED => 'Resource created successfully.',
            self::DELETED => 'Resource deleted successfully.',
            self::BAD_REQUEST => 'Bad request. Please check your input.',
            self::UNAUTHORIZED => 'Unauthorized access.',
            self::FORBIDDEN => 'You do not have permission to access this resource.',
            self::NOT_FOUND => 'Resource not found.',
            self::INTERNAL_SERVER_ERROR => 'An error occurred on the server.',
        };
    }
}

