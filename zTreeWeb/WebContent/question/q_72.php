<?php?><div class="qDiv" id ="q_72"><h2>7.2、如何让一套数据同时使用到两棵树上？</h2>
<p>&nbsp;&nbsp;&nbsp;&nbsp;因为 zTree 在加载节点时，要对节点数据生成 tId 属性，当做节点的唯一标示，所以直接将同一套数据加载在多棵树时就会出现异常。所以必须将节点进行 clone 处理后再提供给其他树使用。请参考 zTree 代码中的 tools.clone 方法</p>