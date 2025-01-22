namespace Mageplaza\HelloWorld\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Controller\ResultInterface;
use Mageplaza\HelloWorld\Api\PostRepositoryInterface;

class Index implements HttpGetActionInterface
{
    private PageFactory $pageFactory;
    private PostRepositoryInterface $postRepository;

    public function __construct(
        PageFactory $pageFactory,
        PostRepositoryInterface $postRepository
    ) {
        $this->pageFactory = $pageFactory;
        $this->postRepository = $postRepository;
    }

    public function execute(): ResultInterface
    {
        // Load posts from the PostRepository
        $posts = $this->postRepository->getList();

        // Prepare the data for output
        $data = [];
        foreach ($posts as $post) {
            $data[] = $post->getData();
        }

        // Render the page result
        $pageResult = $this->pageFactory->create();

        // Set the posts data in the block
        $block = $pageResult->getLayout()->getBlock('content');
        if ($block) {
            $block->setData('posts', $data);
        }

        return $pageResult;
    }
}
