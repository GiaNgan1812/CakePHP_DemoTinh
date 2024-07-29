<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class DemoTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);
        // Không cần cấu hình kết nối cơ sở dữ liệu vì dữ liệu là tĩnh
    }

    /**
     * Get all static data.
     *
     * @return array
     */
    public function getAll(): array
    {
        return [
            ['id' => 1, 'title' => 'Bài viết 1', 'content' => 'Nội dung bài viết 1'],
            ['id' => 2, 'title' => 'Bài viết 2', 'content' => 'Nội dung bài viết 2'],
            ['id' => 3, 'title' => 'Bài viết 3', 'content' => 'Nội dung bài viết 3'],
        ];
    }

    /**
     * Get a specific static data item.
     *
     * @param int $id The ID of the item to retrieve.
     * @return array|null
     */
    public function getItemById($id): ?array
    {
        $data = $this->getAll();
        foreach ($data as $item) {
            if ($item['id'] == $id) {
                return $item;
            }
        }
        return null;
    }
}
