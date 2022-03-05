<?php
class index extends Controller {
    private indexModel $indexModel;
    public function __construct()
    {
        $this->setIndexModel(new indexModel);
    }

    public function indexAction()
    {
        $this->loadView("index/indexAction", [
            'title' => "صفحه اصلی",
            'data' => [
                'results' => $this->getIndexModel()->getAll()
            ]
        ]);
    }
    public function notFound(){
        header("HTTP/1.0 404 Not Found");
        $this->loadView("index/notFound", [
            'title' => "Home",
            'data' => [
                'content' => 'گشتم نبود نگرد نیست :('
            ]
        ]);
    }

    /**
     * @return indexModel
     */
    public function getIndexModel(): indexModel
    {
        return $this->indexModel;
    }

    /**
     * @param indexModel $indexModel
     */
    public function setIndexModel(indexModel $indexModel): void
    {
        $this->indexModel = $indexModel;
    }
}