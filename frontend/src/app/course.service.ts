import { Injectable } from '@angular/core';

@Injectable()
export class CourseService {

  CourseList: Object[] = [
    {'no': 1, 'coursename' : 'courseA'},
    {'no': 2, 'coursename' : 'courseB'},
    {'no': 3, 'coursename' : 'courseC'},
    {'no': 4, 'coursename' : 'courseD'},
  ];

  constructor() { }

}