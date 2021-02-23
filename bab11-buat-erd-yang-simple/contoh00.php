<?php

//https://stackoverflow.com/questions/55307369/mysql-database-schema-for-two-relational-tables

#--------------------------------------------------------------------------------------------------
print <<<END
Course                Theme
--------              --------
CourseID <--+         ThemeId
Name        |         Name
            +------   CourseID
            |
            |
            |         Video
            |         --------
            |         VideoID
            |         Name
            |         Length
            +------   CourseID
            |
            |
            |         Resource
            |         --------
            |         ResourceID
            |         Name
            +------   CourseID
END;
#--------------------------------------------------------------------------------------------------
print <<<END
                Course             Theme
                      --------           --------
            +---->    CourseId    +--->  ThemeId
            |         Name        |      Name
            |         ThemeId ----+
            |
            |
            |         Video
            |         --------
            |         VideoID
            |         Name
            |         Length
            +------   CourseID
            |
            |
            |         Resource
            |         --------
            |         ResourceID
            |         Name
            +------   CourseID
END;
#--------------------------------------------------------------------------------------------------
print <<<END
                    Course         Course_Theme      Theme
                      --------       ------------      --------
            +---->    CourseId <----- CourseId   +-->  ThemeId
            |         Name            ThemeId ---+     Name
            |         ThemeId
            |
            |
            |         Video
            |         --------
            |         VideoID
            |         Name
            |         Length
            +------   CourseID
            |
            |
            |         Resource
            |         --------
            |         ResourceID
            |         Name
            +------   CourseID
END;
#--------------------------------------------------------------------------------------------------
print <<<END
         Course         Course_Theme        Theme
          --------       ------------        -------
+---->    CourseId <---- CourseId
|         Name           ThemeId ----------> ThemeId
|                                            Name
|
|                        Course_Video        Video
|                        ------------        --------
+----------------------  CourseID
|                        VideoId ----------> VideoId
|                                            Name
|                                            Length
|
|                        Course_Resource     Resource
|                        ---------------     --------
+----------------------- CourseId
                         ResourceId -------> ResourceId
                                             Name
                                             Url, etc.
END;
#--------------------------------------------------------------------------------------------------
print <<<END
END;