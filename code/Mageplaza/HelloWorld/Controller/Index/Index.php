

<!-- namespace Mageplaza\HelloWorld\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Controller\ResultInterface;
use Mageplaza\HelloWorld\Model\PostFactory;
 
class Index implements HttpGetActionInterface
{
    private PageFactory $pageFactory;
    // private PostFactory $postFactory;

    public function __construct(
        PageFactory $pageFactory,
        PostFactory $postFactory
    ) {
        $this->pageFactory = $pageFactory;
        $this->postFactory = $postFactory;
    }

    public function execute(): ResultInterface
    {
        // Load posts from the PostFactory
        $post = $this->postFactory->create();
        $collection = $post->getCollection();

        // Prepare the data for output
        $data = [];
        foreach ($collection as $item) {
            $data[] = $item->getData();
        }

        // Render the page result (you can modify this part for other types of results if needed)
        $pageResult = $this->pageFactory->create();

        // You can pass the $data to the page's layout if needed
        $pageResult->getLayout()->getBlock('content')->setData('posts', $data);

        return $pageResult;
    }
}   -->