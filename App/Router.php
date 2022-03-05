<?php


class Router
{
    private string $url, $controller, $method;
    private object $object;
    private array $params;
    public function __construct()
    {
        $this->setUrl();
        $this->setController($this->getUrl());
        $this->setMethod($this->getUrl());
        $this->setParams($this->getUrl());
        if (file_exists("./Controller/{$this->getController()}.php")) {
            $this->setObject(InstanceClass::get($this->getController()));
            if (method_exists($this->getObject(), $this->getMethod())) {
                call_user_func_array(
                    [
                        $this->getObject(),
                        $this->getMethod()
                    ],
                    $this->getParams()
                );
            } else {
                $this->notFound();
            }
        } else {
            $this->notFound();
        }
    }

    private function notFound()
    {
        call_user_func_array(
            [
                InstanceClass::get("index"),
                    "notFound"
                ],
            []
        );
    }
    private function setUrl(): void
    {
        header("Powered-By: aryandev.ir");
        if (ValidValue::requireValues(["url"], $_GET)) {
            $this->url = rtrim($_GET['url'], '/');
        } else {
            $this->url = "index/indexAction";
        }
    }

    /**
     * @return string
     */
    private function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param mixed|object $object
     */
    public function setObject(mixed $object): void
    {
        $this->object = $object;
    }

    /**
     * @return mixed|object
     */
    public function getObject(): mixed
    {
        return $this->object;
    }

    /**
     * @param string $controller
     */
    public function setController(string $controller): void
    {
        $this->controller = explode("/", $controller)[0];
    }

    /**
     * @return string
     */
    public function getController(): string
    {
        return $this->controller;
    }

    /**
     * @param string $method
     */
    public function setMethod(string $method): void
    {
        $array = explode('/', $this->getUrl());
        if (ValidValue::requireValue($array[1] ?? null)) {
            $this->method = $array[1];
        } else {
            $this->method = 'indexAction';
        }
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @param string $params
     */
    public function setParams(string $params): void
    {
        $this->params = array_slice(
            explode(
                '/',
                $this->getUrl()
            )
            , 2
        );
    }

    /**
     * @param string $url
     */
    /**
     * @return array
     */
    public function getParams(): array
    {
        return $this->params;
    }
}