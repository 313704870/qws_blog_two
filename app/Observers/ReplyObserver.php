<?php

namespace App\Observers;

use App\Models\Reply;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class ReplyObserver
{
    //创建成功一条回复,更新下字段
    public function created(Reply $reply)
    {
        $reply->topic->increment('reply_count', 1);
    }

    //过滤攻击
    public function creating(Reply $reply){
        $reply->content = clean($reply->content, 'user_topic_body');
    }
}