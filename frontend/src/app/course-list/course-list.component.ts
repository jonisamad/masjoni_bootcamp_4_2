import { Component, OnInit } from '@angular/core';
import { CourseService } from '../course.service';
import { FormsModule } from '@angular/forms';

@Component({
  selector: 'app-course-list',
  templateUrl: './course-list.component.html',
  styleUrls: ['./course-list.component.css']
})
export class CourseListComponent implements OnInit {

  NewCourse = {
    'no' : 0,
    'coursename': ''
  };

  constructor(private courseservice: CourseService) { }

  ngOnInit() {
  }

  AddCourse() {
      this.NewCourse.no = this.courseservice.CourseList.length + 1;
      this.courseservice.CourseList.push(this.NewCourse);
  }

}