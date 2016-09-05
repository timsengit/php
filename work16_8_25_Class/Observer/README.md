---
title: 观察者封装类

grammar_cjkRuby: true


----------


 - ###  IObservable.php封装被观察者的方法，IObserver.php封装观察者的方法，User.php封装观察者实现IObserver方法，MessageSystem.php封装封装被观察者，实现IObservable方法
 - Test.php为测试用例，使用addObserver方法向被观察者添加观察者，使用doNotify方法通知订阅者信息更新