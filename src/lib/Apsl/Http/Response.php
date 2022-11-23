<?php

namespace Apsl\Http;


class Response
{
    const HEADER_CONTENT_TYPE = 'Content-Type';
    const HEADER_CONTENT_LENGTH = 'Content-Length';

    protected array $headers = [];
    protected string $body = '';

    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function addHeader(string $name, string $value): void
    {
        $this->headers[$name] = $value;
    }

    public function deleteHeader(string $name): void
    {
        unset($this->headers[$name]);
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function setBody(string $body): void
    {
        $this->body = $body;
    }
}
