<?php

$s1 = '
AAAA
BBCD
BBCC
EEEC
';

$s1 = '
RRRRIICCFF
RRRRIICCCF
VVRRRCCFFF
VVRCCCJFFF
VVVVCJJCFE
VVIVCCJJEE
VVIIICJJEE
MIIIIIJJEE
MIIISIJEEE
MMMISSJEEE
';

$s1 = '
SSSSSSSSQQQQQQQUUUUUUUUBBBBBBBBBBBBBBBBBBBBBNNNNNNNNVVVVVVOIIIIIIIIIIIIILLLLLLLLLLLLLLTTSSSSSSSSSGGGGGGGGGGGGGGGGGKKKKKKKKKJJJJJJJJJJJJJJJJJ
SSSSSSSSQQQQQQUUUUUUEUUUUSBBBBBBBBBBBBBBBBBVVNVGNGNVVVVVOOOIIIIIIIIIIIIILLLLLLLLLLLLLLLLSSSSSSSSSGGGGGGGGGGGGGGGGGKKKKKKKKKKJJJJJJJJJJJJJJJJ
SSSSSSSQQQQQQQQUUUUUUUUUUBBUBBBBBBBBBBBBBBVVVGGGGGNVVVVVOOOIIIIIIIIIIIIILLLLLLLLLLLLLLLSSSSSSSSSSSGGGGGGGGGGGGGGGGKKSKKKKKKJJJJJJJJJJJSJJSSJ
SKSKKSSKQQQQQUUUUUUUUUUUUUUUBBBBBBBBBBBBBBBVGRGGGGGVVVVOOOOOOOIIIIIIIIIILLLLLLLLLLLLLLLSSSSSSSSSSSGGGGGGGGGGGGGGGGKKSKKKKKJJJJJJJJJJJJSJSSSJ
SKKKKKSKQQQQQUUUUUUUUUUUUUUQBBBBBBBBBBBBBBBGGGGGGGCOOOOOOOOOOIIIIIIIIIIIILLLLLLLLLLLLLSSSSSSSSSSSSSOGGGGGGGGGGGGGGGKSSSKKJJJJJJJJJJJJSSSSSSJ
SKKKKKKKKKQQQUQQUUUUUUUUUUUQBBBBBBBBBBBBBGGGGGGGGCCCOOOOOOOOOIIOOIIIIIIIILLLLLLLLLLLLLLSSSSSSSSSSSSGGGGGGGGGGGGGGGGSSSSJJJJJJJJJJJJJJSSSSSSJ
KKKKKKKKKKQQQQQQUUUUUUUUUUUBBBBBBBBBBBBBGGGGGGGGGGKKZZOOOOOOOOOOOOIIIIIILLLLLLLLLLLLLLLLSSSSSSSSSSSSGGGGGGGGGGGGGSSSSAAJJJJJJJJJJJNNNNNSSSSS
KKKKKKKKKKQQQQQQQUUUUUUUUUBBBQBBBBBBBGGGGGGGGGGGKNKKKZOOOOOOOOOOOOIIIIIIILQLLLLLLLLLLOLLSSSSSSSSSSSGGGGGGGGGGGGGSSSSSAJJNJJJJJJOJJNNNNSSSSSS
DKKKKKKKKKQQQQQQQUUUUUUUUUBQQQBBBVBGGGGGGGGGGGGGKKKKKOOOOOOOOOOOOOOOIIIIIIQLLLLLLLLLLSSSSSSSSSSSSSSGGGGGGGGGGGGSSSSSSSILNLEEJEJJJJJNNNNNSSSS
DDKKKKKKQQQQQQQQQUUUUUUUQQQQQBBBBBCCGGGGGGGGGQGGAKKKKKOOOOOOOOOOOOOIIIIIILLLLLLLLLLLLSSSSSSSSSSSSSVVVVVGGGGGGGGSSSSSSIILLLEEEEJFJJNNNNNNSSSS
CCCKCCCCQQQQQQQQQUUUUUUUUUQQQQBBBBCCNGGGGGGGGGGGKKKKKPPOOOOOOOOOOOOOIIIIGLXXXXLLLLLSSSSSSSSSSSSSSSSVVVVVVGGSSSSSSSSSIIILLLLEEEEJJJNNNNNNNNSS
CCCCCCCCQQQQQQQQUUUUUUUUUAIQIQBBIICCNNGGGGGFGGKKKKKKKKKZOOOOOOOOOOOOIIIIGXXXXXXXSSSSSSSSSSSSSSSDSSSVVOVVVGVSSSSSSSSSILLLLLLEEEVVONNNNNNNYYYY
QCCCCCCCQQQQQQQUUUUUUUUUUIIIIIIKIIICNNGGGGFFFFFFFKKKKKZZOOOOOOOOOOOYIIIIIXXXXXXSSSSSSSSSSSSDDRSSSSSOOOVVVGVSSSSSSSSIILLLLLLLLVVVVBNNNNNYYYYY
QCCCCCCCQQQQQQIUUUUUUUUUIITIIIIKIININNNNNNNFFFFFKKKKZZZZOOOOOOOOOOOYYIIIXXXXXXXGSSSSSSSSSSSSDDUUSOOOOVVVVVVSASSYYYSLLLLLLLVVVVVVBBNNNNNNYYYY
QCCCCCCCCQQQQQIUUUKUUUMMMMMMIIIIIIIINNNNNNNNFFFFKKKZZZZZOOOOOOOOYYYYYIIIXXXXXXXGGSSSSSSSSSSSDUUUSGOOOVVVRRRSSSSYYYYLLLLLLLVVVVVVVBYNNNYYYYYY
QCCCCVVCCVQQQQQKKDKUUUMMMMMMMMMMMMINNNNNNNNEFEFFFKKKZZZZZOOOOOOOYYYYXXXXXXXXXXXGSSSSSSSSSSSSDDUUUOOOVOOVVVRRSRSSYYYYLLLLLLVVVVVVVVYYYNYYYYYY
QQCCVVVVVVQQQQQKKKKKKUMMMMMMMMMMMMNNNNNNNNNEEEFEEZZZZZZZZZOOOOOOYYYYXXXXXXXXKKKGGSSJSSSJSSSDDDDOOOOOOOOVRRRRSRRRRYYLLLLLVVVVVVVVVYYYYNYYYYYY
QQQQQVVVVQQQQQKKKKKKKKMMMMMMMMMMMMNNNNNNNEEEEEEEZZZZZZZZZOOOOOOOYYYYYXXXXXXKKKKKKKSJJJSJSJSDDDDOOOOOOOOVRRRRRRRRRRYYLVLVVVVVVVVVVVYYYYYYYYYY
QQQQVVVVVVQRQQKKKKKKKRMMMMMMMMMMMMNNNNNNNENNNEZZZZZZZZZZTTTTTTTTTYYXYXXXXXXKKKKKKJJJJJJJJJJDDDDDOOOOOOORLRRRRRRRRRRYYVVVVVVVVVVVVVYYYYYYYYYY
QQQQQQVVVVVQQQQKKKKKKKMMMMMMEEEEEEENNNNNNNNNNEEZZZZZZZZZTTTTTTTTTXXXXXXXXXKTKKKKKJJJJJJJJJJDDDDOOOOOYOORRRRRRRRRRRRRVVVVVVVVVVVVZZKYYYYYYYYY
QQQQQVVVVVKKQQKKKKKKKKMMMMMMEEEEEEENNNNNNNNNNNZZZZZZZZZYTTTTTTTTTXXXXXXXXXKKKKKKKJJJJJJJJJSSSOOOOOOOYRRRRRRRRRRRRRRRDDVVVVVVVVVVVZKYYYYYYYYY
QQQQQQQQQVKKKKKKKKKKKKKKKKWIEEEEEEENLLLNNLLFNZZZZZZZZZZZTTTTTTTTTXXXXXXXXKKKKKKKKJJJJJJJJSSSSSSSOOOOOORRRRRRRRRRRRRRDVVVVVVVVVVVVKKKKKYYYYYY
QQQQQQQVVVKKKKKKKKKKKKKKKKKKEEEEEEENLLLLLLFFNZZTTTTTTTTTTTTTTTTTTXXXXXXXXXKKKKKKKKJJJJJJJJSSSJJSOOOOOOORRRRRRRRRRRRRDVVVVVVVJJVVVKKKKKYYYYYY
IIIIIQQQVKKKKKKKKKKKKKKKKDDKEEEEEEENNYLLLLLLZZZTTTTTTTTTTTTTTTTTXXXXXXXXXXKKKKIKKJJJJJJJJJSJJJJOOOOOOOORRRRRRRRRRRRRDVVVVVVVVKVKKKKKKKKYYYYY
IIIIIQIVVVVVKKKKKKWKDKDDDDDDEEEEEEETTLLLLLLLZZZTTTTTTTTTTTTYOYYYXXXBXXXXXXXXKIIIKKKJJJJJJJJJJJJOROOOOOORRRRRRRRRRRRDDVVVVVVVUKKKKKKKKKKKYYYY
IIIIIIIVVVVVYKKKKKKDDDDDDDDDEEEEEEETTLLLLLLLLZTTTTTTTTTTTTTYYYYYYYBBBXXXXXXXXIIIKKKUJJJJJJJJJJJOOOOOOOOOOORRRRRRRRRDDVVVVVVUUUKKKKKKKKKKZYYY
IIIIIIVVVVVVKKKKKKKSDDDDDDEEEEEEEEEEELLLLLLLLZTTTTTTTTTTTTTYYYYYYEBBBBXXXXVVXKKKDKKUKKJJJJJJCCCCCOOOOOOOOORMRMRMMMDDDDDVVVUUUUKKKKKKKKKZZYYY
IIIIIIVVVVVVKIKKKKDDDDDDDDDEEEEEEEEEELLLLLLLETTTTTTTTTTTTYYYYYYYYYBBBBBXXXVVKKKKDKKKKKJJJJJJCCCCCOOOOOOOOOOMMMMMMMDDDDDDVVVUUUUKKKKKKKKKZOOY
IIIIIIIVVVVVKIKKKKDDDDDDDDDEEEEEEEEEEILLLLLLETTTTTTTTTTTTYYYYYYYYYYYTBBUXDVVKKKKKKKKKKKJJJXJCCCCCOOOOOOOOOOMMMMMMMDDDDSVVVUUUIIIIQKKKKKKZOOQ
JIJIIIIVVVVIIIIIIIIDDDDDDEDEEEEEEEEEEEEEELLLETTTTTTTTTTTTTTTTTTTTTYTTTUUUDDVKKKKKKKKKIXJJXXXCCCCCOOOOOOOORMMMMMMMMMDDSSSSUUIIIIIKKKKKKKOOOOQ
JJJJIIIVVIVVIIIIIIIIXXDDDEEEEEEEEEEEEEEEEQQQEETTTTTTTTTTTTTTTTTTTTTTTTUDDDQKKKKKKKKKXXXJJJXXCCCCCOOOOOOOOOMMMMMMMMMMDSSSSSSSIIIIKKKKKNKKOOQQ
JJJJJIIIIIIIIIIIMIIIXXEEEEEEEEEEEEEEEEEEEQQQEQTTTTTTTTTTTTTTTTTTTTTTTTUDDDDDDKKKKKKXXXXXXXXXCCCCCOOOOOOOOQMMMMMIMMMMSSSSSSSSIIIIIIKKKKKKOQQY
JJJJJIIIIIIIIIIIIIIXXXLEEEEEEEEEEEEEEEEEEQQQQQTTTTTTTTTTTTTTTTTTTTTTDDDDDDDDDKKKKKKXXXXXXXXCCCCCCCCCOOOOOOFMMFFMMMMHHSSSSSSSSIIIIIIKIKIIYYYY
JJJJJIIIIIIIIIIIIIXXXLLLLLEEEEEEEFREEEEEEQQQQQQTTTTTTTTTTTTTTTTTTTTTTDDDDDDDDDKKKKXXXXXXXXXCCCCCCCCCOOOFFFFFFFMMMMHHSSSSSSSSSIIIIIIIIIIIYYYY
JJJJJKIIIIIIKIIILQLLXLLLLLEEEEFFFFREEEEEEQQQQQQTTTTTTTTTTTTTTTTTTTTTTDDDDDDDKKKKKKKKXXXXXXXCCCCCCCCCCCFFFFFFFFFFMMMSSSSSSSSSIIIIIIIIIYYYYYYY
JJJJJKKKKKKKKRIYLLLLLLLLLLLEEEFFFFFEEEEEEQQQQQQTTTTTTTTTTTTTTDVDDDTTTTDDDDDDKKKKKKKKKXXXXXXCCCCCCCCCCCFFFFFFFFFFFFSSFSSSSSSSISSIIIIYYYYYYYYY
JJJJJKKKFFKKKKYYYLLLLLLLLLLEEFFFFFFEEEEEEQQQQQQTTTTTTTTTTTTDDDDDDDTTTTDDDDDDDKKKKKKKKXXXXXXXXUUUUUUCCCFFFFFFFFFFFFFFFSSSSSSSSSSIIIIIYYYYYYYY
JJKKKKKKKKKKYYYYYLLLLLLLLLLENNNFVFFFFFFQQQQQQQQQTTTTTNTTTTDDDDDDDDTTTDDDKDDKKKKKKKKKKXXDXHXOUUUUUUUCCCFFFFFFFZFFZFFFFFESFFCFSSKIIXIIYYYYYYYY
JJJJKKKKKKKKKKYYYYYLLLLLLLLLFFFFFFFFFFFQQQQQQQQQTTTTNNGNNNNNNNDDDTTEDDDKKKDKKKKKKKKKKKKKXUUUUUUUUUUCCCEEEFFFFZZZZFFFFFFUFFFFXSIICXIYYYYYYYYY
JJKKKKKKKKKKKKKKVVVKLLLLLLLLGFFFFFFFFFFFQQQQQQQQTTTTNNGGGGNNNNDQQEEEEEEKKKKKKKKKKKKKKKKXXUUUUUUUUUUEEEEEEEEZZZZZZFFFFFFFFFFFFNNICCYYYYYYYYYY
JJKKKKKKKKKKKKKVVVVVVLLLLLLLLQFFFFFFFFFFFFQQQQQQTTTTGGGGGNNNNEEEEEEEEEEEKKKKKKKLKKKKJJJXXUUUUUUUUEEEEEEEEEDZZZZZZZFFFFFFFFFFFFNFCCCYYYYYYYYY
JJKKKKKKKKKKKKVVVVVVVVLLFFLLLFFFFFFFFFFFFFQQQQQQTTTTGGGGGNNNNNEEEEEEEEEEKKKKKLKLLTTTTTJJUUUUUUUUUUEEEEEEEEEZZZZZZZFFFFFFFFFFFFFFCCCYYYYYYYYY
JJKKKKKKKKKKKVVVVVVVVVLLFFFLFFFFFFFFFFFCZFQQQQQQTTTGGGGGGGNNNNEEEEEEEEEEEEEEKLLLLTTTTTTJJUUUUUUUUUEEEEEEEEEZZZZZZFFFFFFFFFFFFFCCCCCYYYYYYYYY
JJJJJKKKKKKKKVVVVVVVVVLFFFFFFFFFFFFFFCCCQQQQQQQQTGTTGGGGGGGNNNEEEEEEEEEEEEELLLLDDTTTTTTJJUUUUUUUUUEEEEEEEEEZZZZZZZFFFFFFFFFFFFFCCCCYYYYYYYYY
JJJJJKKKXKKKKKVVVVVVVVFFFFFFFFFFFFFFFCCEOQQQGQQQGGGGGGGGGGGNNNNEEEEEEEEEEDLLLLLDDTTTTTTJJJUUUUUZUUUEEEEEEEEZZZZZZZZQQFFFFFFFFFCCCCCYYYYYYYYY
JDDDKKKXXXXKKVVVVVVVVVFFFFFFFFFFFFFFFFCEEEEGGQQQGGGGGGGGGGGGNNNEEEEEEEEEEDDYLDDDDTTTTTTJJJUUUUZZUUZZEEEEEEEZZZZZZZZZQQQFFFFFFFFCCCCYYYYYYYYY
JTDDIIXXXXXKKKVVVVVVFFFFFFFFFFFFFFFFCCCEEEGGGGQGGGGGGGGGGGGGNNNENEEEEEEEEDDDLDDDDTTTTTTJJJUUUOZZZZZZZEEEDDEZZZZZZZZZQQQFFFFEFFCCCCCYYYYYYYYY
JDDDXXXXXXXXXKKVVVIVFFFFFFFFFFFFFFFFCCCEEEEEGGGGGGGTGGGGGGGGNNNNNNNEEEDDDDDDDDDDDTTTTTTJJJOOOOZZZGZZZZEEZZZZZZZZZZZZNQQFHHHFFGCCCYYYYYXYYYYY
JJDDDXXXXXXXXKXFFFFVFFFFFFFFZZFFFFFBBBCEEEEGGGTGTGTTGGGGGGGGNNNNNNNDDDDDDDDDDDDDDTTTTTTJJJOOOOGGZGZZZZZZZZZZZZZZZZZQNQQFHHHGGGGGGTXYXXXYXYYY
JDDDDXXXXXXXXXXFFFFFBBBBBFFFZZOZFZBBBBBBTTTGTTTTTTTTGAAAAAAAAANNNNNNDDDDDDDDDDDOOTTTTTTTTTTTOOOGGGGGZGGZZZZZZMZZZZQQNQQFHGGGGGGGGTXYXXXXXXYB
JDDDDXXXXXXXXFFFFFFFBBBBBFFZZZZZFZZBBBBTTTTTTTTTTTTTTAAAAAAAAANNNNFFVDDDDDDDDDDDOTTTTTTTTTTTOOGGGGGGGGGZZGZBZZBZZNNNNQQFGGGGGGGGGXXXXXXXXXXB
JDDDYYXUXXXXXFFFFFFFBBBBBFZZZZZZZZZZBBBBTTTTTTTTTTTAAAAAAAAAAANNFFFFVVDDDDDDDDDDOLTTTTTTTTTTOOGGGGGGGGGGGGBBBBBBBNNNNQQQQCCGGGGGSSSXXXXXXXXB
JNJDYYUUUXXXXFXXXFFFBBBBBFZZZZZZZZZZZBBBBTTTTTTTTTCAAAAAAAAAAANFFFFFFFHDDNDDDDDDOLTTTTTTTTTTOOOGGGGGGGGGGGGBBBBBBBBNNNQCCCCGGGGGGSXXXXXXXXXX
JJJUUUUUUXXXXXXXXXFFBBBBBFZZZZZZZZZZZBZZBTTTTTTTTTAAAAAAAAAAAAFFFFFFFFHDDNNNDDDDDLTTTTTTTTTTOOGGGGGGGGGGGBBBBBBBBBNNNNNNCCCCGLGGSSXXXXXXWXXX
JJJXUJJUUXXXXXXXXDFFBBBBBFOZZZZZZZZZZZZZBBWWWTTTGGGGGGGGAANFFFFFFFFFFFHDFNNNDDDDDDTTTTTTTTTTTOGGGGGGGGGGGBBWBBBBBNNNNNNCCCCCGLLGGXXXXXXXXXXX
JJJUUUUUUUXXXXCXXFFFBBBBBFZZZZZZZZZZZZZZBBWWWWTTGGGGGGGGAAFFFFFFFFFFFFFFFNNNNNNPDOTTTTTTTTTTTOZGGGGGGGGWWWWWBWWWNNNNNNNNCCCCGLLGHHHXHHHXHHHX
GJUUUUUUUUXXXXCXXFGGBBBBBFZZZZZZZZZZZZZZZBBWWWTAGGGGGGGGAAFFFFFFFFFFFFFFFNNNNPPPDOTTTTTTTTTTTZZGGGGGGGWWWWWWWWWNNNNNNNNNNNCCGHHHHHHXHHHHHHHX
UUUUUUUUUUXXXXCVVFCGBBBBBJJZZZZZZZZZZZZZZBBWWWWAGGGGGGGGNNFFFFFFFFFFFFFFSNNNNNNDKOTTTTTTTTTTTZZZZGGGGGGWWWWWWWWWWNNNNNNNCCCGGHHHHHHHHHHHHHHH
UUUUUUUUUUUXCCCCCRCCCCCJJJJJZZZZZZZZZZBBBBBWWWWAGGGGGGGGNNNNFEFFFFFFFFFFFNNNNNNDDDDTTTTTTTTTTZZZZZGGGGGWWWWWWWWNNNNNNNNNNCCCGGGHHGGGHHHHHHHH
UUUUUUUUUUUUUCCCCCCCCCCCCJJZZZZZZZZZZBBBBBWWWWWAGGGGGGGGNNNNEELFFFFFFFFNNNNNNNNDDDDTTTTTTTTTTTTZGGGGGGGWWWWWWWWNNNNNNNNNCCCCGGGGGGGHHHHHHHHH
CUUUUUUUUUUUUUCCCCCCCCCCCCOZZZZZZZAZBBBBBBBWWWWAGGGGGGGGNNNEEELFFFFFFFFFNNNNNNNDDDDDDDDTTTTTTTTZZGGGGGWWWWWWWWWNNNNNNNNNNCCCGGGGGGGHHHHHHHHH
UUUUUUUUUUUUUBBCCCCCCCCCCCOZZZZZZAAABBBBBBIIWWIAGGGGGGGGNNNNEELFEAFFFFFFNNNNNNNNNDDDDDDTTTTTTTTZZGGGGWWWWWWWWWWNNNNNNNCCCCCCGGGGGGHHHQHHHHHH
MMUUBBUUUUBUBBBCCCCCCCCCCCOZZZZZZZAAAMBBBGGGGGGGGGGGGGGGKKEEEEEEEEEFFFNNNNNNNPNNNDDDDDDTTTTTTTTZGGGGGGWWWWWWWWWWNENNNGCCCCCCGGGGGGGHQQQHHHHH
MMUUUBBBBUBUBBBCCCCCCCCCCCOOOOOZOOOAAMMBBGGGGGGGGGGGGGIKKKKEEEEEEEEFFFFNNNNNNNNDDDDDDDDDKKZTTTTZZGGGGGGYWWWWWWWWEEGGMGCCCCCGGGGGGGGHHHQQHHHH
MMUUUBBBBBBBBBBCCCCCCCCCCOOOOOOOOOOOOMMMBGGGGGGGGGGGGGIIKKKKEEEEEEEEFFFNNNNNNNNDDDDDDDDDKKZTTTTZZZGXGYYYYWWWWWWWWWGOGGCCCCGGGGGGGHHHHQQQHHHH
MMUBSBBBBBBBBBBBBCCCCCCCOOOOOOOOOOOOMMMMMGGGGGGGGGGIIIIKKKKKEEEEVEEEFFFFNNNNNNNNNDDDDDDDKZZTTTTZZAYYYYYYYWWWWWWWWWGGGGCACCGGGGGGGHHHHQQQHQQQ
MBBBBBBBBBBBBBBBBBCCCCOOOOOOOOOOOOOOMMMMMGGGGGGGGGGIIIIKKKKKKKEEVVEEFFVVNNNNNNNDDDDDDDDVKZZTTTTTTTTOJYYYYYWWWWWWWGGGGGCAAAHPCGGDGHHHQQQQHQQQ
MMMBBBBBBBBBBBBBBBJJOOOOOOOOOOOOOOOOMMMMMGGGGGGGGGGIIIIKKKKKKKKKKVVVVVVVNNNNNNNNNDDDVVVVKKKTTTTTTTTJJYYYYYYYYWWWZGGGGGGAAAPPPIIGGHHHHUQQQQQQ
MMBBQQBBBBBBBBBBBJJJJOOOOOOOHHHVVOKOMMMMMIIIIIIIIIIIIIIKKKKKKKKKKKVVVVVVNNNNNNNNNDDVVVVVKTTTTTTTTTTJJYYYJYYYYYYGGGGGGAAAAAPPPIIPPAAHHUUUCQQQ
MQQQQQBBBBBBBBJJBJJJJJJOOOOHHHHHVVKKMMPMKKKAIIIIIIIIKKKKKKKKKKKKVVVVVVVVVNNNNCNNDVVVVVVVVTTTTTTTTTTJJJJJJYYYYYGGGGGGGGGAAAPPPPPPPAAHHUUUCCCQ
MQQQBBBBBBBBBJJJJJJJJJJJJOHHHHHHHVKKMKKKKAZAIIAAIIIIKKFKKKKKKKXXXVKVVVVVDDNNNCCCVVVVVVVVVTTTTTTTTTTJJJJJJYYYYYGGGGGGGPPPPPPPPPQPPACCCCCCCCCQ
MQQQBQBBBBBBBJJJJJJJJJJJOOHHHHHHHHKKKKKKKAAAAAAAIAIIFKFFKKKKXXXXXKKKVVDDDDNNDVVVVVVVVVVVVTTTTTTTJJJJJJJJJJYYYYGGGGGGGGGPPPPPPPPPPAACCCCCCCCC
QQQQQQQBBBBBBJJJJJJJJJJJJOHHHHHHHHHKKKKKKAAAAAAAAAAAFFFFKKKKXXXXXKKKVVDDDDDDDDVVVVVVVVVVVTTTTTTTJJJJJJJJJYYYYYGGGGGGGGGGPPPPPPPPPPAACCCCCCCY
QQQQQQQQJBBBBBJJJJJJJJJJOOOHHHHHKHKKKKKKKAAAAAAAAAAAFFFFXXXXXXXXXKKKVVDDDDDDVDVVVVVVVVVVVTTTTTTTJJJJJJJJJJJYYYGGGGGGGGGGGPPPPPPPPPPCCCCCCCYY
QQQQQQQBBBBBBJJJJJJJJJJJOOOFFFFKKHKKKKKAAAAAAAAAAAAAFFFFXXXXXXXXKKKVVVDDDDDDVVVVVVVVVVVVJTTTTTTTYYJJJJJJJJYYYYYGGGGGGGGGPPPPPPPPPPCCCCCCCYYY
QQQQQQQQQBBBBBJJJJJJJJJJOOOOOFFKKKKKAAAFAAAAAAAAAAAFFCCCXXXXXXXXKKVVVDDDDDDDVVVVVVVVVVVVJTTTTTTTJYJJJJJJJJJYYYGGGGGGZGGVPPPPPPPPPPCCCCCCCYYY
QQQQKKQQQQBBBJJJJJJJJJJEOOOOFFFAKKKAAAAAAAAAAAIIIIIIFFFCXXXXXXXXXXXXXXXDDDDDVVVVVVVVVVVVYTTTTTTTJYYJJJJJJYYYYYYGGGGGZZUZPPPPPPPPPCCCCCCCCCYY
QQQQQKKKQQBBBJJJJJJJXNNEEOOOOAAAACAAAAAAAAAAAAIIIIIICCCCXXXXXXXXXXXXXXXDDDDDVDVVVVVVVVVVYYYYYYJJJYYYJJJJJYYYYYYYGGZGTZUZBPPPPPPPPVCCCEEEECYY
QQQQLBBKKBBBBBJJJJJJXNNNOOOQQQQAAAAAAAAYAAAAAAIIIIIIPPCCXXXXXXXXXXXXXXXRRDDDDDVDDVVVVVVVYYYYYYYYYYYYYYYYYYYYYYYYYZZZZZZZZPPPPPPPPVCCCEEEEEYY
QQQQBBBBBBBBBBJJJJJJJNNOOQQQQQQAAAAAAAAAAAAAAAIIIIIIPACCXXXXXXXXXXXXXXXRRDDDDDDDDVVVVVVVYYYYYYYYYYYYYYYYYYYYYYYYYYZZZZZZZUPEPEPPPPCCEEEEEYYY
AAAABBBBBBBBBBJJJJJJJJJQQQQQQQAAAAAAAAAAAAAAAAIIIIIIAAFYCCCCCCXXXXCYDDDDDDDDDDDDDDDVVVNNYYYYYYYYYYYYYYYYYYYYYYYYYYZZZZZZZUEEEEEPPEEEEEEEEEYY
AAAAABBBBBBBBBBJJJJJJJQQQKQQQQAAAAAAAAAAAFAAAAIIIIIIFFFCCCCCCCXXXXCYDDDDDDDDDDDDDDNNNNNNNYYYYYYYYYYYYDDDDYDDYYYYZZZZZZZZZZEEEEEEEEEEEEEEEEEY
AAAAAVABBBBBBBBQJJJJJQQQKKKQKAAWAAAAAAAAAAAAAAIIIIIIFNFNNNNNNNCCCCCYYDDDDDDDDDDDDDDNNNNNNYYYYYYYYYYYDDDDDDDYYYYYZZZZZZZZZZZEEEEEEEEEEEEEEEEY
AAAAAAABBBBBBBBQQJJJQQQQQKKKKKAWWAAAAAMMAAAAAAIIIIIIFNFNNNNNNNCYCYYYYDDDDDDDDUDDDDDDDNNNNYYYYYYYYYYYDQDDDDDYYYYZZZZLZZZZZZZEEEEEEEEEEEEEEEEY
AAAAAAAAAAAABBBQQQQQQQQQQQKKKKWWWAAAAAAAAAAAAAIIIIIIFFFNNNNNNNCYCYYYYYDDDDDDDDIIIDDDDNNNYYYYYYGYYYYDDQDXXDDDDYYZLLLLZZZZZZZEEEEEEEEEEEEEEEEY
AAAAAAAAAAAEBBQQQQQQQQQQQQQQKWWWWWWAAAAAAAAAAAAAFFFFNNNNNNNNNNYYYYYYYYYYDDWDDDDIIDDDDDNYYYYTYYYYYYYYQQQXXDDDXYYZLLLLLLZZZZEEEEEEEEEEEEEEEEEY
AAAAAAAAAAEEBBGQGQQQQQQQQCCCKCWCCCWWWWWAAHAAAAAAFFFFNNNNNNNNNNYYYYYYYYYDDWWYDLDDIIIDDDDHHQQQYZYYYYQQQQXXXDDDXLYXLLLLLZZZVZEEEEEEEEMEEEEEMMMM
AAAAAAAAAAEEEGGGGGQGGGQQQCCCCCCCCWWWWWWAAAAAAAAAFFFFNNNNNNNNNNQYQQQYYYYYYYYYGDDDDDDDDDDDHQQQQQQQQYQQQQQXXXDDXXXXLHHHLZVVVZEEEEEEEEMEEEMMMMMM
AAAAAAAAAAEEGGGGPGGGGGCCCCCCCCCCCRRRRWWWWWWFFFAFFFFFNNNNNNNNNNQQQQQYYYYYYYYYGDDDDDDDDDDQQQQQQQQQQQQQXXXXXXXXXHHXHDHHLZZZZZEEEEEEMMMEEMMMMMMM
AAAAAAAAAWGGGGGGGGGGGGGCCCCCCCCCCRRRRWWWWWWWWFAFFFFFNNNNNNNNNNYYQQQQQYYYYYYYGGDDDDDDDRDQQQQQQQQQQQQQXXXXXXXXXHHHHHHHLLLEEEEEEEEMMMMMMMMMMMMM
AAAAAAAUAWWGGGGGGGGGGDCCCCCCCCCCCRRRRRRWWWWWWFFFFFFFNNNNNNNNNNYYQQQQQYJYYYYYYGDDDDDDFFQQQQQQQQQQQQQXXXXXXXXXXHHHHHHHLLLEEEEEEEEMMMMMMMMMMMMM
AAAAAAAAAAAGGGGGGGGGCCCCCCCCCCCXCCRRRRWWWWWWWWWDFFFFNNNNNNNNNNYQQQQQYYJYYYYDDDDDDDFDFFFQQQQQQQQQQQXXXXXXXXHHHHHHHHHHHHHEEEEEWWEMMMMMMMMMMMMM
AAAAAAAAAAGGGGGGGGGGGCCCCCXCCICXXKKRRWWWWWWWWWDDFFKKNNNNNNNNNNQQQQQQYJJYYYYDDDDDDFFFFFFCCCCCCCCQQQXXXXXXXXHRHHHHHHHHHZZNZZEEEWWMMMMMMMMMMMMM
AAAAAAAAAAGGGGGGGGGGCCLCCCCCCCKXKKKWWWWWWWWWWWWDFKKKNNNNNNNNNQQTQRQQQJJYYYYDDDDDDFCCCCCCCCCCCCCQQQQQXXXXXXXXHHHHHHZZZZZZZZZEEWWAMMMMMMMMMMMM
IIIIAAIAAAAIGGGGGGGGGCLCCCCCOCKKKKKKWWWWWWWWWWWDDKKKKKKKKKKKKQQQQRRQTTJJYYYDDDDDFFCCCCCCCCCCCCCQQQXXXXXXXXXXHHHHHHZZZZZZZZZZWWWMMMMMMMMMMMMM
IIIIIIIIAIAIAGGGGGGGGGLNNNCCOOOKKKKKKKKKKWWWWWWWWKKKKKKKKKKKKQQQQQQTTTTJYHYRRRRFFFCCCCCCCCCCCCCQQQQXXXXXXXBBBHHHHZZZZZZZZZZZZWJMMMMMMMMMMMMM
IIIIIIIIIIIIIGGGGGGGGGNNNNCNNONKKKKKKKZKSWWWWWWWWWKKKKKKKKKKKQQQQQQQTTTTTYYRRRRRRFCCCCCCCCCCCCCQQQQXXXXXXXBBHHHZZZZZZZZZZZZZWWWMMMMMMMMMMMMM
IIIIIIIIIIIIIGGGGGGGGGNNNNNNNNNZKKKKKKKSSWWWWWWWWWWKKKKKKKKKQQQQQQQQTTTTTTTUURRRRFCCCCCCCCCCCCCQQQQQXXXXXXXXZHHZZZZZZZZZZZZZZWWWWWMMMMMMMMMS
IIIIIIIIIIIIRAAAAANNGNNNNNNNNNNKKKKKKKSSLWWWWWWWWWWMKKKKKKKKQQQQQQQQQQUUUTUUUURFRFFFCCCCCCCCCCCQQQQQXXXXXXXZZZZZZZZZZZZZZZZZZWWWWWMWWGMMMMMS
IIIIIIIIIIIIAAAAAANNNNNNNNNNNNNKKKKKKKKSLLWWWWWWMWWYKKKKKKKKYQQQQQCQQQUUUTUUUUUFFFFFFFFFFFHHHHHHHHHHXXXXXBXXZZZZZZZZZZZZZZZOZWWWWWWWGGMGMMMG
IIIIIIIIIIIAAAAAAAANNNNNNNNNNNNKKKKKKKLSLLWWCWMMMYYYKKKKKYYYYQQQQQCQQQUUUUUUUUUUFFFFFFFNFHHHHHHHHHHXXXXXXXXXXZZZZZZZZZZZZZZOZZZWWWWWGGGGMGVG
IIIIIIIIIIIAAAAAAANNNNNNNNNNNNNXXKKKLLLLLLLWWMMMYYYYYKYKYYYYYQQQCCCCCQUUUUUUUUUUPFFFFFFFFHHHHHHHHHZZZZAAXXXXXZZZZZZZZZZZZZZZZUUWWWWGGGGGGGGG
IIIIIIIIIIIAAAAAAANNNNNNNNNNNNXXXKKKKLLLLLLMMMMMYYYYYYYYYYYYYQQCCCCCCCUUUUUUUUUUFFFFFFFFFFHHHHHHHZZAAAHAAAXXZZZZZZZZZZZZZZZUUUUUUGGGGGGGGGGG
YIIIIIIIIIIAAAAAAANNNNNNNNNNNNXXXKKKKLLLLLLLMMMMMYYYYYYYYYYYYYYYCCCCCCUUUUUUUUUUFFHFFFFFFHHHHHHHHHZAAAAAAAXXXZZZZZZZZZZZZZZZUUUUUGGGUGGGGGGG
YYIIIIIIIIAAAAAAAANNNNNNNNNNXXXXXXXXXLLLLLLLMMMMMMYYYYYYYYYYYYCCCCCCCCRRUUUUUUUUGFHHHHHHHHHHHHHHHHAAAAAAAAAXXZZZZZZZZZZZZZZZUUUUUUGGGGGGGGGG
YYYIIIIIIIAAAAAAAAANNNNNNNNNNXXXXXXXXLLLLLLLLMMMMMYYYYYYYYYYYYYYCCCCRRRRRUUUCCUUGHHHHHHHHHHHHAHAKKAAAAAAAAAXXZZZZZZZZZZZZZUUUUUUGGGGGGGGGGGG
YYYYINNIIIAAAAAAAAANNNNNNNNXXXCXXXXXXXLLLLLLMMMMMYYYYYYYYYYYYYYRRRRRRRRRRUCUCCCCHHHKHHHHHHHHHAAAAAAAAAAAAAAAXZZZZZZZHHZZZZUUUUUUGGGGGGGGGGGG
YYYYINIIIAAAAAAAAAAAAQNONICCCXCCXXXXXXXXLLLLMMMMMMYYYYYYYYYYYYRRRRRRRRRRRCCCCCCZZHHHHHHTTHHHHHAAAAJAAAAAAAAAAEZZZZZHHHZZZZUUUUUUGGGGGGGGGGGG
YYYYYAAAAAAAAAAAAAAAANNQQQCCCCCCXXXXXXXXLMMLMMMMMMYYYYYYYYYYYYRRRRRRRRRRCCCZZCCZZTTTTTTTTTHHHHAJJJJAAAAAAAAAAAZZZZZZHHZZZZUUUUUUGGGGGGGGGGGG
YYYYYAAAAAAAASSAAAAAAIQQQQCCCCCCXXXXXXXXLMMMMMMMMMMMMMMYZYRRYRRRRRRRRRRRZCCZZZCCZZTTTTTTCTHHHHHHJJJAAAAAAAAOOOZZPPPOHUUCUUUUUUUUUGGGGGGGGGGG
YYYEEEEAAAAASSSAAAAAAQQQQCCCCCCCCCCXXXXXLMMMMMMMMMMMWWMWRRRRYYRRRRRRRRRRZZZZZZZZZBTTTTTPTTHHHHHHHJJJJAAXAAAAAZZZPOOOOOUUUUUUUUGGGGGUGGGGGGGG
YEEEEEEAAAAASSAAAAAAQQQQQCCCCCCCCCCCCXXXLMMMMMMMWWMWWWMWRRRRRRRRRRRGRRRZZZZZZZZZZZTTTTTTTTTTHHHHHJJJJAAAAMMMMMZZZHHOONNUVUUUUUGGUGUUUGGGGGGG
YEEEEEEDAAASSSAAKQQAQQQVQCCCCCCCCCCCXXXKKMMMMMMMWWWWWWWWRRRRRRRRRRRRRRZZZZZZZZZZZZZTTTTTTTTTTJJJJJJJJJAAMMMMMMMZZHHOOONVVVVUUUUUUGUUKGGGGGZG
YEEEEEAAAAAASSKKKQQQQQVVQCCCCCCCCCCCCKXKMMMMMMMMMMWWWWWWRRRRRRRRRRRRRZZZZZZZZZZZZZZTTTTTTTTTTTJJJJJJJJJTMMMMMMMZZHHOVVVVVVVVUUUKUUUUKKGGGGGG
EEEELEEEGAASSSSCKKVQQVVVHCCCCCCCCCCCKKKKKKKMMMMMWWWWWWWPWRRRRRRRRRRRIMMZZZZZZZZZZTTTTTTTTTTTTTJJJJJJJJTTTMMMMMMZJJHHHHHVVVVVVKUKKKUUKKKKKGUU
NEEEEEEEEARWSSSSTKVVVVVVHCCCCCCCCCCKKKKKKKKKMMMMWWWWWWWWWRRRRRRRRIIRIMMZZZZZZZZZZTTTTTTTTTTTTJJJJJJJJJTTTTMTTTTTJJJHHHHVVVVVKKKKKKKKKKKKKKKU
EEEEEEEERRRWWSSSSSSVVVVVHCCCCCCCCCCKKKKKKKKKKMMMMWWBWWWWWRRRRRRRRBBBBBBBBBBZZZZZZTTTTTTTTTTTTJJJJJJJJJTTTTTTTTTTTHHHHHHVVVVVKKKKKKKKKKKKKKKK
HEEEEEEERWWWWHHSSSSSVVVVVVCCCOCCCCKKKKGKKKKKKMMMMMWBWWWWWRRRRRRRRBBBBBBBBBBZZZZLZTTTTTTTTTTJJJJJJJJJTTTTTTTTTTTTTTHHHHVVVVVVKKPKKKKKKKKKKIII
EEEEEEEEERWWWHHSWSSSSVVVVVCCCCCKKKKKKKKKKKKKMMMBBBBBBWWWBRRRRRRRRBBBBBBBBBBZYZZTTTTTTTTTTTTTCJCJJZZJTTTTTTTTTTTTTTTHHVVVVVVKKKKKKKKKKKKKKIII
EEEEEEEEEEEWWWWWWVVVVVVVVVVVCCCKKKKKKKKKKKKQBBBBBBBBBBBVBRRRRRRRIBBBBBBBBBBZZZXTTTTTTTTTTCTCCCCJCZZNTTTTTTTTTTTTTTTHHVVVVVVKKKKKKKKKKYKKIIII
EEEEEEEEEEEWWWWWWVVVVVVVVVVVVCKKKKKKKKKKKKIQBQBBBBBBBBBBBBBRRRRRBBBBBBBBBBBZXXXGKTTTTTTTTCCCCCCCCCNNTNTTTTTTTTTCVVVVVVVVVVVKKKKKKKKKKYYYYIII
EEEEEBBEEWWWWWWWWVVVVVVVVVVVVVVKKKKKKKKKKIIQQQQBBBBBBBBBBBBRUUUUUBBBBBBBBBBIXXXGGTTMTTTTTCCCFFFFFFFNNNTTTTTTTTTVVVVVVVVVVVVVVKKKKKKKKKKYYYII
EEEEEBBBEWWWWWWWWVVVVVVVVVVVVVVVKKKKKKKKKIIIQQBBBBBBBBBBBBRRUUUUUBBBBBBBBBBIXXXGCTTMMTTTTCCCFFFFFFFNNNNNTTTTDTNVVVVVVVVVVVVVVKKVKKKKYKHYYYII
LBEBBBBBJWWWWWWWVVVVVVVVVVVVVVKKKKKKKKKKIIIIIINTBBBBBBBBBBRRUUUUUBBBBIIIIIIIIGGGGGMMMCTCCCCCFFFFFFFNNNNNDDTDDDDVVVFVTTTVTVVVVKVVVYYYYYYYYYYY
BBBBBBBBJJJWWWWWWWVVVVMVVVVVVVKKKKKKKKKKKKIIIINTBBBBBBBBBRRRUUUUUBBBBIIIIIIIIIGGGGGMMCCCCCCCFFFFFFFNNDDDDDDDDDDDDTTTTTTTTVTTVVVVVVVYYYYYYYYY
BBBBBBBBJJJJJWWWWWWGGGVVVVVVVKKKOKKKKKKKKKIIINNNBBBBBBBBBRRRUUUUUBBBBIIIIIIIIIGGHMMMCCCCCCCCFFFFFFFNNDDDDDDDDDDDDCTTTTTTTTTTVVVVVVVYYYYYYYYY
BBBBBBBJJJJJWWWWWWWWGGGGVVVVVKKOOOKKKKKKKKKIKKNUUUUBBBBBBRRRUUUUUBBBBIIIIIGGGGGHHHCCCCCCCCCCCCCCOOODDDDDDDDDDDDTTTTTTTTTTTTTVVVVVYYYYYYYYYYL
BBBBBBJJJJJJJWWWWQQQGGGGVVVVKKKOOOOKKKKKKKKKKKUUUUUBBHBBBBRRJJJJBBBBBIIIIIGGGGHHHHHCCCCCCCCCCCCCOOOODDDDDDDDDDDTTTTTTTTTTTTTTVVVVVYYYYYYYYYY
BBJJJJJJJJJJJWWQQQQQQGGGGVGGGKOOOKKKKKKKKKKKKKUSSUUUJUBBBURRYYYJJJIIIIIIIIGGGGHHHHHHHHCCCCCCCCCOOOOOODDDDDDDDDTTTTTTTTTTTTTTTVVAAVYYYYYYYYYY
BBJJJJJJJJJJWWQQQQQQGGGGGGGKKKKKOKKKKKKKKKKOKKUUUUUUUUBBUUUQQYYJJJIIIIISIIIGGGGHHHHHHHHCHCCCCCCCOOOODDDDDDDDDDTTTTTTTTTTTTTTAVAAAYYYYYYYYYYY
JJJJJJJJJJJJJWWQQQQQGGGGGGGGKKKKKKKKKKKKKKKOOKUUUUUUUUUUUUUQQQJJJJIIIIIGGIGGGGGHHHHHHHHHHCCHCCCCCCCDDDDDDDDDDDDTTTTTTTTTTTAAAAAAAAYYYYYYYYYY
JJJJJJJJJJJJWWWQGQGQGGGGGGGGGKKCKKKKKKKKKOOOOJUUUUUUUUUUUUQQQVQJJIIIIIZZGGGGGGGHHHHHHHHHHHHHCGCCCBKBPDDDDSDDDDDTTTTTTTTTTTTTAAAAAAYYYYYYYYYU
JJJJJJJJJJJJJJBGGGGGGGGGGGGGGKCCKKKKKKKKKOOOOOUUUUUUUUUUUUQQQQQJJJIZZZZZGGGGGGGHHHHHHHHHHHHCCGCBBBBBBSDGDDDDDDTTTTTTTTTTTTTTAMAAAAYYYYYYYYYU
JJJJJJJJJJJBJJBGGGGGGGGGGCCGCCCCCKKKKKKKAOOOOOOUUUUUUUUUUUQQQQQQZZIZZZTZGGGGGGGHHHHHHHBHHHHBBBBBBBBBDDDDDEEDDDEQQLTTTTTTTTTCMMAYYYYYYYYYYYYU
JBJJJJJJJJJBBBBBGGGGGGGGGCCCCCCCCCCCKKKAAOOOOOOOOUUUUUUUUUQQQQQQQZZZZZXXXGGGGGGHHHHHHHBBBBBBBBBBBBBBBDDDDEEEDEEQQQIIITTTTTTTTMMMYCYYYYYYUUUU
BBBBJLLLQJBBBBBBBGGGGGGGGGCHHCCCCCCCWKKKAAOOOOOOOOOOUUUUUUQQQQQQQZZZZXXXZZZGGHHHHHHMBBBBBBBBBBBBBBBBDDDDDEEEEEQQQQIQITTTKTTTMMMMMCYYYYYUUUUU
BBBBJLLLLLLBBBBBBGGGGGGGGGGHHCCCCCCCCKAAAOOOOOOOOOOOUUUUUUQQQQQZZZZZZXXXZZZZGGHMMHHMBBBBBBBBBBBBBBBQDDDDDEEEEEEQQQQQITTTKKKTMMMMMCYYYYYUUCUC
BBBBBBLLLBBBBBBBBGGGGGGGGGCCCCCCCCCCCAAAAOOOOOOOOOOOOOOUUUTQQQQZZZZZZZZZZZZZGGGGMMMMBBBBBBBBBBBBBBBQDDDDEEEEEEQQQQQQQKKKKKKMMMMMCCCCCCCCCCCC
BBBBBLLLLLBBBBBBBBBBGGGGGGCCCCCCCCCAAAAAOOOOOOOOOOOOOOOOCCOQQZQZZZZZZZZZZZZZGGGGMMMMBBBBBBBBBBBBBBBDDDDDDEEEEEEQQQQKQKKKKKKMMMMMCCCCCCCCCCCC
BBBBBBBBBBBBBBBBBBBGGGGNGJJJCCCCCCAAAAAAOOOOOOOOOOOOOOOOOOOZZZZZZZZZZZZZZZZZZZZZMMMMMBBBBBBBBBBBBBBTTTTDEEEEEEEEEQKKKKKKKKKMMMMMMMMCCCCCCCCC
';