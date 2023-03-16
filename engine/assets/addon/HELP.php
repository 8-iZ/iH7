sMsg($c,'Существует три способа управления ботами на движке iR0N H3ART:'.PHP_EOL.'> Классический способ с использованием динамических клавиатур отображаемых в "подвале" чата и под сообщениями отправляемыми ботом (GUI MOD)'.PHP_EOL.'> Консольный режим, в котором бот реагирует на текстовые команды начинающиеся с символа "<code>\</code>" (CONSOLE MOD)'.PHP_EOL.'<code><i> Если в пустом поле для ввода сообщения напечатать символ "/", бот подскажет список простейших основных команд, включая команду получения справки</i></code>'.PHP_EOL.'К некоторым командам можно указать список параметров в определенном порядке, как правило отделяемых друг от друга пробелами. Существуют как команды без параметров, так и более сложные команды предусматривающие работу с текстовыми строками, а также выполняющие целые алгоритмы действий. Полное руководство по таким командам доступно пользователям с аккаунтом разработчика и партнерам проекта, использующим наши API в своих ресурсах.'.PHP_EOL.'> Третий способ доступен пока что в "beta" режиме, то есть находится в стадии разработки и тестирования. Он подразумевает под собой выполнение ботом задач путем обычного общения с ним, как с человеком. Данный метод возможен благодаря использованию алгоритмов самообучающегося искусственного интеллекта разработанного командой iR0N H3ART (DIALOG MOD)',$menu);
sMsg($c,'<code>/start</code> - <i>команда (пере)запускает бота, также автоматически инициирует новую сессию и обновляет меню (при наличии обновлений). Также в параметре этой команды можно задать пользовательский ID для формирования реферальной ссылки.</i>'.PHP_EOL.'<code>/help</code> - <i>команда для получения данного текста справки. Если вы не нашли в нашей БАЗЕ ЗНАНИЙ ответа на интересующий вас вопрос, можете обратиться в нашу службу поддержки воспользовавшись кнопкой в "ПОДВАЛЕ" чата.</i>'.PHP_EOL.'<code>/exit</code> - <i>команда завершающая сессию и закрывающая все меню бота. После ввода этой команды использование любых команд кроме <code>/start</code> не возымеют никакого эффекта.</i>',$menu);
sMsg($c,'<code>/new</code> - <i>запуск новой сессии бота. Текущая сессия (при наличии) будет сброшена, а все кэшированные пользовательские данные и файлы сохраненные во временной памяти будут очищены.</i>',$menu);