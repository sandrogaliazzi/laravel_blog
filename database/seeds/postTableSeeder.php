<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use App\Post;

class postTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'author_id' => 1,
            'title' => 'Jogo fácil',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex amet hic, sapiente dolor tenetur numquam deleniti dicta voluptas obcaecati incidunt optio vel. Magni nobis perferendis sunt commodi, est vitae exercitationem?',
            'path_to_image' => 'posts-img/volei.jpeg'
        ]);

        Post::create([
            'author_id' => 1,
            'title' => 'Educação',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae justo tempor, facilisis ante et, auctor nunc. Phasellus malesuada lorem erat, in lobortis dolor mollis finibus. Fusce nisi diam, porttitor vitae lectus quis, cursus feugiat diam. Mauris elementum lobortis nibh volutpat faucibus. Praesent nec elit diam. Etiam ultricies felis leo, ut feugiat mi interdum non. Pellentesque viverra mauris et libero egestas, id lacinia quam dictum.
            Sed faucibus egestas bibendum. Pellentesque nec tellus arcu. Donec sed urna porta, porta urna vitae, pharetra ante. Donec eget dui in lacus volutpat blandit. Donec sit amet leo interdum, elementum arcu eu, facilisis ligula. Donec pellentesque metus et diam mollis consequat. Aliquam elementum nisl sit amet lorem tempor, in dictum arcu tincidunt. Vivamus consequat aliquam egestas. Morbi vehicula malesuada orci et posuere. Duis vel dui varius, dignissim tellus at, vulputate dui.
            Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed consequat justo non justo mattis, at semper augue tristique. Aliquam vitae arcu non ipsum hendrerit pellentesque. Fusce iaculis est ut diam lobortis lobortis. Mauris sed ex nec enim volutpat aliquet et a leo. Integer consectetur, dui eu laoreet suscipit, purus est mollis eros, sit amet cursus metus est vel elit. Maecenas eu nunc nisi. In hendrerit pharetra laoreet. Nulla at massa venenatis, condimentum augue eget, dapibus augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec tristique tincidunt lorem, in finibus felis blandit nec. Cras sodales lorem orci, vehicula lobortis magna tincidunt at. Nam facilisis molestie tellus, eget malesuada felis tincidunt non. Cras vitae porttitor velit.
            Praesent semper mi id nunc tincidunt, vel eleifend sem aliquam. Aenean risus turpis, suscipit in aliquam quis, tempus vitae quam. In ac porttitor erat. Curabitur vel eros at urna feugiat consectetur. Suspendisse vitae lacus arcu. Ut aliquam velit nec tempus rutrum. Sed sagittis commodo mi pellentesque mollis. Maecenas quis pharetra enim.
            Donec semper pellentesque eros quis porttitor. Nulla congue lorem ut leo vehicula placerat. Vivamus at felis eget tortor mattis pharetra. Fusce nec metus finibus, congue nisl et, aliquam quam. Pellentesque pellentesque facilisis ante eget dignissim. Fusce vel sodales nulla, eu elementum odio. Duis sodales sed dui sed commodo. Etiam eu enim sed urna imperdiet hendrerit. Nullam malesuada tempus justo quis varius. Nunc ullamcorper viverra nisi. Mauris eleifend, odio id sollicitudin rhoncus, elit risus condimentum arcu, sed vestibulum ante lectus ut justo. Interdum et malesuada fames ac ante ipsum primis in faucibus.',
            'path_to_image' => 'posts-img/livro.jpeg'
        ]);
        
        Post::create([
            'author_id' => 1,
            'title' => 'Cultura',
            'content' => 'Integer lobortis in enim sed tincidunt. Nulla vel lorem pretium, mattis eros sit amet, facilisis ante. Cras ultricies tempor pulvinar. Nunc ornare porta sem. Duis et elit sit amet tellus fringilla mattis eu sed ex. Nulla a convallis urna. Duis condimentum, tellus eu dignissim ultricies, est lectus fringilla enim, sed congue sapien justo non nisl. Pellentesque eleifend quis ex quis ultricies. Pellentesque quis metus ut nunc aliquam tristique. Aenean aliquet aliquet pulvinar. Aliquam erat volutpat. Maecenas facilisis lectus nibh, sit amet pulvinar erat pulvinar ac. Aenean mattis massa sed sapien ultricies, in bibendum purus condimentum. Suspendisse nec sem leo. Donec aliquam lorem non mi finibus congue. Integer ultricies lacus sed lacinia suscipit.
            In et sapien sed odio bibendum pellentesque. Sed arcu felis, rutrum eget urna non, vestibulum aliquet dolor. Fusce venenatis velit in lorem blandit vestibulum. Quisque egestas quis diam a bibendum. Etiam vestibulum nisl a lectus posuere semper. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse potenti. Cras a porttitor lacus. In hendrerit, tellus a rutrum venenatis, quam ligula imperdiet libero, tempus sagittis mi est et ipsum. Aenean convallis mi at erat iaculis blandit.
            Vestibulum id lacus sed libero elementum iaculis sit amet in nibh. Phasellus imperdiet ex non purus placerat facilisis ac et tortor. Nulla pulvinar arcu metus, nec tempor turpis sollicitudin eu. Nullam ornare commodo quam nec eleifend. Curabitur placerat rutrum tempor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed vitae libero sit amet lectus fermentum efficitur ut vitae nunc. In accumsan massa eget ex pulvinar, vel cursus turpis sollicitudin.  
            Vivamus vel iaculis ex, sit amet pharetra metus. Suspendisse id suscipit elit. Donec suscipit lacus eu nisl pretium dictum. Phasellus mattis orci diam, vitae vehicula erat imperdiet vitae. Quisque hendrerit lorem purus, eget placerat mauris gravida at. Aliquam tincidunt lacinia aliquet. Praesent porttitor tortor felis. Vestibulum a metus ex. Proin ut magna nisl. Morbi eu metus sem. Phasellus quis congue sapien. Nulla interdum lectus sem, porta imperdiet est interdum eget. Praesent id mauris felis. Sed a sapien pharetra, ullamcorper nibh et, imperdiet libero. Donec ornare interdum rutrum. Quisque eu lectus non urna vestibulum consequat at quis enim.            
            Maecenas consectetur purus velit. Sed in est est. In non nisi ut magna mollis elementum vel id nisi. Nulla sed ligula felis. Donec fermentum at lacus ac euismod. Suspendisse facilisis ex orci, at mollis diam sollicitudin quis. Donec et consequat turpis. Etiam ut nulla purus. Quisque semper dolor eget varius dignissim. Phasellus euismod, nisl et blandit gravida, eros tellus aliquam quam, nec tincidunt lectus urna ut nunc. Fusce non ante ac nibh venenatis tempus. Integer et semper lacus. Proin nec sapien hendrerit, dignissim lacus sit amet, bibendum neque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque sem nunc, congue quis mauris finibus, luctus hendrerit quam. Maecenas at lectus elit.',
            'path_to_image' => 'posts-img/teatro.jpeg'
        ]);

        Post::create([
            'author_id' => 1,
            'title' => 'Lazer',
            'content' => 'Quisque porta, est sit amet sodales suscipit, nulla sapien auctor enim, sit amet placerat turpis metus ut justo. Maecenas sodales sem vitae turpis tincidunt, vel fringilla turpis ornare. Vestibulum ut laoreet orci. Praesent sodales tellus vitae erat eleifend, in fermentum massa suscipit. In gravida odio et vulputate ultrices. Integer ut pharetra ex, sed vulputate augue. Curabitur fermentum mattis sapien sed finibus. Donec mattis maximus facilisis. Sed pretium dolor a euismod ullamcorper. Curabitur eget gravida sapien, ac sollicitudin neque. Mauris suscipit consequat tellus, vitae dapibus nulla tempus vel. Donec feugiat velit neque, et vehicula erat pellentesque id.
            Nunc luctus urna a congue elementum. In viverra purus sapien, id bibendum felis porttitor nec. Vivamus a semper purus, ornare elementum elit. Quisque efficitur nec felis in maximus. Suspendisse potenti. Vestibulum aliquet urna eget enim congue, quis tincidunt magna venenatis. Pellentesque tincidunt molestie justo, fringilla consectetur nisl. Nunc lectus nulla, suscipit ac tellus et, vestibulum efficitur ex.
            In finibus mi at viverra ultricies. In hac habitasse platea dictumst. Nunc tristique mi turpis, non sollicitudin risus aliquam tincidunt. Integer molestie convallis neque eget aliquet. Proin at facilisis tellus, ut posuere tortor. Pellentesque ut feugiat tortor, vitae vestibulum nisl. Quisque condimentum turpis et neque pretium, in maximus dolor euismod. Aenean convallis, dui et varius sollicitudin, nibh ligula rhoncus lacus, in faucibus elit ipsum a eros. Ut augue tellus, congue a varius vel, ultrices nec ante. Integer nec dignissim turpis. Fusce lorem dui, consequat accumsan tellus hendrerit, imperdiet efficitur turpis. Phasellus tincidunt a enim sed rhoncus. Vivamus facilisis justo vitae suscipit hendrerit.',
            'path_to_image' => 'posts-img/paisagem.jpeg'
        ]);
        
    }
}
